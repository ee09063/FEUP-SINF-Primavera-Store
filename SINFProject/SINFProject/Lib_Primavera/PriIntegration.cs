using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using Interop.ErpBS800;
using Interop.StdPlatBS800;
using Interop.StdBE800;
using Interop.GcpBE800;
using ADODB;
using Interop.IGcpBS800;
//using Interop.StdBESql800;
//using Interop.StdBSSql800;

namespace SINFProject.Lib_Primavera
{
    public class PriIntegration
    {
        # region Cliente

        public static List<Model.Cliente> ListaClientes()
        {
            StdBELista objList;

            List<Model.Cliente> listClientes = new List<Model.Cliente>();

            if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
            {
                string cliente = "SELECT Cliente, Nome, Moeda, NumContrib, Fac_Mor AS Morada, B2BEnderecoMail as Contacto FROM  CLIENTES";
                objList = PriEngine.Engine.Consulta(cliente);

                while (!objList.NoFim())
                {
                    listClientes.Add(new Model.Cliente
                    {
                        CodCliente = objList.Valor("Cliente"),
                        NomeCliente = objList.Valor("Nome"),
                        NumContribuinte = objList.Valor("NumContrib"),
                        Morada = objList.Valor("Morada"),
                        Contacto = objList.Valor("Contacto")
                    });
                    objList.Seguinte();

                }

                return listClientes;
            }
            else
                return null;
        }

        public static Model.Cliente GetCliente(string codCliente)
        {
            StdBELista objList;
            Model.Cliente cli = new Model.Cliente();

            if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
            {
                string sql = "SELECT Cliente, Nome, Moeda, NumContrib, Fac_Mor AS Morada, B2BEnderecoMail as Contacto FROM  CLIENTES WHERE Cliente = '" + codCliente + "'";
                objList = PriEngine.Engine.Consulta(sql);
                
                cli.CodCliente = objList.Valor("Cliente");
                cli.NomeCliente = objList.Valor("Nome");
                cli.NumContribuinte = objList.Valor("NumContrib");
                cli.Morada = objList.Valor("Morada");
                cli.Contacto = objList.Valor("Contacto");

                return cli;
            }
            else
            {
                return null;
            }
        }

        public static Lib_Primavera.Model.RespostaErro UpdCliente(Lib_Primavera.Model.Cliente cliente)
        {
            Lib_Primavera.Model.RespostaErro erro = new Model.RespostaErro();     
            GcpBECliente objCli = new GcpBECliente();

            try
            {
                if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
                {
                    if (PriEngine.Engine.Comercial.Clientes.Existe(cliente.CodCliente) == false)
                    {
                        erro.Erro = 1;
                        erro.Descricao = "O cliente não existe";
                        return erro;
                    }
                    else
                    {
                        objCli = PriEngine.Engine.Comercial.Clientes.Edita(cliente.CodCliente);
                        objCli.set_EmModoEdicao(true);

                        objCli.set_Nome(cliente.NomeCliente);
                        //objCli.set_NumContribuinte(cliente.NumContribuinte);
                        objCli.set_Morada(cliente.Morada);
                        objCli.set_B2BEnderecoMail(cliente.Contacto);

                        System.Diagnostics.Debug.WriteLine("\n\n\n" + cliente.Morada + "\n\n\n");
                        

                        PriEngine.Engine.Comercial.Clientes.Actualiza(objCli);

                        erro.Erro = 0;
                        erro.Descricao = "Sucesso";
                        return erro;
                    }
                }
                else
                {
                    erro.Erro = 1;
                    erro.Descricao = "Erro ao abrir a empresa";
                    return erro;
                }
            }
            catch (Exception ex)
            {
                erro.Erro = 1;
                erro.Descricao = ex.Message;
                return erro;
            }

        }

        public static Lib_Primavera.Model.RespostaErro DelCliente(string codCliente)
        {

            Lib_Primavera.Model.RespostaErro erro = new Model.RespostaErro();
            GcpBECliente objCli = new GcpBECliente();


            try
            {

                if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
                {
                    if (PriEngine.Engine.Comercial.Clientes.Existe(codCliente) == false)
                    {
                        erro.Erro = 1;
                        erro.Descricao = "O cliente não existe";
                        return erro;
                    }
                    else
                    {

                        PriEngine.Engine.Comercial.Clientes.Remove(codCliente);
                        erro.Erro = 0;
                        erro.Descricao = "Sucesso";
                        return erro;
                    }
                }

                else
                {
                    erro.Erro = 1;
                    erro.Descricao = "Erro ao abrir a empresa";
                    return erro;
                }
            }

            catch (Exception ex)
            {
                erro.Erro = 1;
                erro.Descricao = ex.Message;
                return erro;
            }

        }

        public static int GetClientNumber()
        {
            StdBELista objList;
            Model.Cliente cli = new Model.Cliente();

            if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
            {
                string sql = "SELECT * FROM Cliente";
                objList = PriEngine.Engine.Consulta(sql);
                return objList.NumLinhas();
            }
            else
            {
                return -1;
            }
        }

        public static Lib_Primavera.Model.RespostaErro InsereClienteObj(Model.Cliente cli)
        {

            Lib_Primavera.Model.RespostaErro erro = new Model.RespostaErro();
            

            GcpBECliente myCli = new GcpBECliente();

            try
            {
                if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
                {
                    myCli.set_Cliente(cli.CodCliente);
                    myCli.set_Nome(cli.NomeCliente);
                    myCli.set_NumContribuinte(cli.NumContribuinte);
                    myCli.set_Morada(cli.Morada);
                    myCli.set_Moeda("EUR");
                    myCli.set_B2BEnderecoMail(cli.Contacto);

                    PriEngine.Engine.Comercial.Clientes.Actualiza(myCli);

                    erro.Erro = 0;
                    erro.Descricao = "Sucesso";
                    return erro;
                }
                else
                {
                    erro.Erro = 1;
                    erro.Descricao = "Erro ao abrir empresa";
                    return erro;
                }
            }

            catch (Exception ex)
            {
                erro.Erro = 1;
                erro.Descricao = ex.Message;
                return erro;
            }
        }

        #endregion Cliente;   // -----------------------------  END   CLIENTE    -----------------------
        
        #region Artigo

        public static Model.Artigo GetArtigo(string codArtigo)
        {
            StdBELista objList;
            Model.Artigo art = new Model.Artigo();
          
            if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
            {
                string sql = "SELECT Artigo.Artigo AS Codigo, Descricao As Nome, Observacoes AS Descricao, Familia, STKActual AS Stock, PrazoEntrega, PVP1 as Preco, CDU_CampoVar1 as Autor, Iva as IVA FROM ARTIGO JOIN ARTIGOMOEDA ON ARTIGO.ARTIGO = ARTIGOMOEDA.ARTIGO WHERE ARTIGO.Artigo='" + codArtigo + "'";
                objList = PriEngine.Engine.Consulta(sql);

                art.Codigo = objList.Valor("Codigo");
                art.Nome = objList.Valor("Nome");
                art.Desc = objList.Valor("Descricao");
                art.Preco = objList.Valor("Preco");
                art.Stock = objList.Valor("Stock");
                art.Categoria = objList.Valor("Familia");
                art.PrazoEntrega = objList.Valor("PrazoEntrega");
                art.Autor = objList.Valor("Autor");
                art.IVA = objList.Valor("IVA");

                return art;   
            }
            else
            {
                return null;
            }
        }

        public static List<Model.Artigo> ListaArtigos()
        {

            StdBELista objList;
            Model.Artigo art = new Model.Artigo();
            List<Model.Artigo> listArts = new List<Model.Artigo>();

            if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
            {
                string artigo = "SELECT Artigo.Artigo AS Codigo, Descricao As Nome, Observacoes AS Descricao, Familia, STKActual AS Stock, PrazoEntrega, PVP1 as Preco, CDU_CampoVar1 as Autor, Iva as IVA FROM ARTIGO JOIN ARTIGOMOEDA ON ARTIGO.ARTIGO = ARTIGOMOEDA.ARTIGO";
                objList = PriEngine.Engine.Consulta(artigo);

                while (!objList.NoFim())
                {
                    listArts.Add(new Model.Artigo
                    {
                        Codigo = objList.Valor("Codigo"),
                        Nome = objList.Valor("Nome"),
                        Desc = objList.Valor("Descricao"),
                        Preco = objList.Valor("Preco"),
                        Stock = objList.Valor("Stock"),
                        Categoria = objList.Valor("Familia"),
                        PrazoEntrega = objList.Valor("PrazoEntrega"),
                        Autor = objList.Valor("Autor"),
                        IVA = objList.Valor("IVA")
                    });
                    objList.Seguinte();

                }

                return listArts;

            }
            else
            {
                return null;

            }

        }

        public static List<Model.Artigo> ListaArtigos(string query, string cat)
        {

            StdBELista objList;
            //Model.Artigo art = new Model.Artigo();
            List<Model.Artigo> listArts = new List<Model.Artigo>();

            if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
            {
                string arts;
                if (!cat.Equals("none"))
                {
                    arts = "SELECT Artigo.Artigo AS Codigo, Descricao As Nome, Observacoes AS Descricao, Familia, STKActual AS Stock, PrazoEntrega, PVP1 as Preco, CDU_CampoVar1 as Autor, Iva as IVA FROM ARTIGO JOIN ARTIGOMOEDA ON ARTIGO.ARTIGO = ARTIGOMOEDA.ARTIGO WHERE Artigo.Descricao LIKE '%" + query + "%' AND Artigo.Familia='" + cat + "'";
                }
                else
                {
                    arts = "SELECT Artigo.Artigo AS Codigo, Descricao As Nome, Observacoes AS Descricao, Familia, STKActual AS Stock, PrazoEntrega, PVP1 as Preco, CDU_CampoVar1 as Autor, Iva as IVA FROM ARTIGO JOIN ARTIGOMOEDA ON ARTIGO.ARTIGO = ARTIGOMOEDA.ARTIGO WHERE Artigo.Descricao LIKE '%" + query + "%'";
                }
                
                if (query.Equals("none") && !cat.Equals("none"))
                {
                    arts = "SELECT Artigo.Artigo AS Codigo, Descricao As Nome, Observacoes AS Descricao, Familia, STKActual AS Stock, PrazoEntrega, PVP1 as Preco, CDU_CampoVar1 as Autor, Iva as IVA FROM ARTIGO JOIN ARTIGOMOEDA ON ARTIGO.ARTIGO = ARTIGOMOEDA.ARTIGO WHERE Artigo.Familia='" + cat + "'";
                }
              
                Console.Write(arts);
                objList = PriEngine.Engine.Consulta(arts);

                while (!objList.NoFim())
                {
                    listArts.Add(new Model.Artigo
                    {
                        Codigo = objList.Valor("Codigo"),
                        Nome = objList.Valor("Nome"),
                        Desc = objList.Valor("Descricao"),
                        Preco = objList.Valor("Preco"),
                        Stock = objList.Valor("Stock"),
                        Categoria = objList.Valor("Familia"),
                        PrazoEntrega = objList.Valor("PrazoEntrega"),
                        Autor = objList.Valor("Autor"),
                        IVA = objList.Valor("IVA")
                    });
                    objList.Seguinte();

                }

                return listArts;

            }
            else
            {
                return null;

            }
        }

        #endregion Artigo // -----------------------------  END   ARTIGO    -----------------------

        #region DocsVenda

        public static Model.RespostaErro Encomendas_New(Model.DocVenda dv)
        {
       
            Lib_Primavera.Model.RespostaErro erro = new Model.RespostaErro();
            GcpBEDocumentoVenda myEnc = new GcpBEDocumentoVenda();

            GcpBELinhaDocumentoVenda myLin = new GcpBELinhaDocumentoVenda();

            GcpBELinhasDocumentoVenda myLinhas = new GcpBELinhasDocumentoVenda();

            PreencheRelacaoVendas rl = new PreencheRelacaoVendas();
            List<Model.LinhaDocVenda> lstlindv = new List<Model.LinhaDocVenda>();

            try
            {
                if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
                {
                    // Atribui valores ao cabecalho do doc
                    
                    //myEnc.set_DataDoc(DateTime.Now);
                    myEnc.set_Entidade(dv.Entidade);
                    myEnc.set_Serie("2015");
                    myEnc.set_Tipodoc("ECL");
                    myEnc.set_TipoEntidade("C");
                    myEnc.set_CondPag("1");
                    
                    lstlindv = dv.LinhasDoc;

                    System.Diagnostics.Debug.WriteLine("1");
                    PriEngine.Engine.Comercial.Vendas.PreencheDadosRelacionados(myEnc, rl);
                    System.Diagnostics.Debug.WriteLine("2");

                    foreach (Model.LinhaDocVenda lin in lstlindv)
                    {
                        PriEngine.Engine.Comercial.Vendas.AdicionaLinha(myEnc, lin.CodArtigo, lin.Quantidade, "", "", lin.PrecoUnitario, 0);
                    }



                    PriEngine.Engine.IniciaTransaccao();
                    System.Diagnostics.Debug.WriteLine("3");
                    PriEngine.Engine.Comercial.Vendas.Actualiza(myEnc);
                    System.Diagnostics.Debug.WriteLine("4");
                    PriEngine.Engine.TerminaTransaccao();
                    erro.Erro = 0;
                    erro.Descricao = "Sucesso";
                    return erro;
                }
                else
                {
                    erro.Erro = 1;
                    erro.Descricao = "Erro ao abrir empresa";
                    return erro;

                }

            }
            catch (Exception ex)
            {
                PriEngine.Engine.DesfazTransaccao();
                erro.Erro = 1;
                erro.Descricao = ex.Message;
                System.Diagnostics.Debug.WriteLine(ex.Message);
                return erro;
            }
        }

        public static List<Model.DocVenda> Encomendas_List()
        {

            StdBELista objListCab;
            StdBELista objListLin;
            StdBELista objListFat;
            Model.DocVenda dv = new Model.DocVenda();
            List<Model.DocVenda> listdv = new List<Model.DocVenda>();
            Model.LinhaDocVenda lindv = new Model.LinhaDocVenda();
            List<Model.LinhaDocVenda> listlindv = new
            List<Model.LinhaDocVenda>();

            if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
            {
                string doc = "SELECT id, Entidade, Data, NumDoc, TotalMerc, Serie From CabecDoc where TipoDoc='ECL'";
                objListCab = PriEngine.Engine.Consulta(doc);
                while (!objListCab.NoFim())
                {
                    dv = new Model.DocVenda();
                    dv.id = objListCab.Valor("id");
                    dv.Entidade = objListCab.Valor("Entidade");
                    dv.NumDoc = objListCab.Valor("NumDoc");
                    dv.Data = objListCab.Valor("Data");
                    dv.TotalMerc = objListCab.Valor("TotalMerc");
                    dv.Serie = objListCab.Valor("Serie");
                    //Verificar existência de uma fatura simplificada para determinar estado
                    string fatura = "SELECT * FROM CabecDoc WHERE TipoDoc='FAR' AND NumDoc='" + dv.NumDoc + "'";
                    objListFat = PriEngine.Engine.Consulta(fatura);
                    if (objListFat.NumLinhas() == 0) //não existe fatura
                    {
                        dv.Estado = "Em processamento";
                    }
                    else
                    {
                        dv.Estado = "Enviada";
                    }
                    //Linhas do Documento
                    string linhas = "SELECT idCabecDoc, Artigo, Descricao, Quantidade, Unidade, PrecUnit, Desconto1, TotalILiquido, PrecoLiquido from LinhasDoc where IdCabecDoc='" + dv.id + "' order By NumLinha";
                    objListLin = PriEngine.Engine.Consulta(linhas);
                    listlindv = new List<Model.LinhaDocVenda>();

                    while (!objListLin.NoFim())
                    {
                        lindv = new Model.LinhaDocVenda();
                        lindv.IdCabecDoc = objListLin.Valor("idCabecDoc");
                        lindv.CodArtigo = objListLin.Valor("Artigo");
                        lindv.DescArtigo = objListLin.Valor("Descricao");
                        lindv.Quantidade = objListLin.Valor("Quantidade");
                        lindv.Unidade = objListLin.Valor("Unidade");
                        lindv.Desconto = objListLin.Valor("Desconto1");
                        lindv.PrecoUnitario = objListLin.Valor("PrecUnit");
                        lindv.TotalILiquido = objListLin.Valor("TotalILiquido");
                        lindv.TotalLiquido = objListLin.Valor("PrecoLiquido");

                        listlindv.Add(lindv);
                        objListLin.Seguinte();
                    }

                    dv.LinhasDoc = listlindv;
                    listdv.Add(dv);
                    objListCab.Seguinte();
                }
            }
            return listdv;
        }

        public static Model.DocVenda Encomenda_Get(string numdoc)
        {
            StdBELista objListCab;
            StdBELista objListLin;
            StdBELista objListFat;
            Model.DocVenda dv = new Model.DocVenda();
            Model.LinhaDocVenda lindv = new Model.LinhaDocVenda();
            List<Model.LinhaDocVenda> listlindv = new List<Model.LinhaDocVenda>();

            if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
            {
                string st = "SELECT id, Entidade, Data, NumDoc, TotalMerc + TotalIva as Total, Serie From CabecDoc where TipoDoc='ECL' and NumDoc='" + numdoc + "'";
                objListCab = PriEngine.Engine.Consulta(st);
                dv = new Model.DocVenda();
                dv.id = objListCab.Valor("id");
                dv.Entidade = objListCab.Valor("Entidade");
                dv.NumDoc = objListCab.Valor("NumDoc");
                dv.Data = objListCab.Valor("Data");
                dv.TotalMerc = objListCab.Valor("Total");
                dv.Serie = objListCab.Valor("Serie");
                //Verificar existência de uma fatura simplificada para determinar estado
                string fatura = "SELECT * FROM CabecDoc WHERE TipoDoc='FR' AND RefDocOrig='" + dv.NumDoc + "'";
                objListFat = PriEngine.Engine.Consulta(fatura);
                if (objListFat.NumLinhas() == 0) //não existe fatura
                {
                    dv.Estado = "Processing";
                }
                else
                {
                    dv.Estado = "Sent";
                }
                //Linhas do Documento
                string linhas = "SELECT idCabecDoc, Artigo, Descricao, Quantidade, Unidade, PrecUnit + TotalIva as Total, Desconto1, TotalILiquido, PrecoLiquido from LinhasDoc where IdCabecDoc='" + dv.id + "' order By NumLinha";
                objListLin = PriEngine.Engine.Consulta(linhas);
                listlindv = new List<Model.LinhaDocVenda>();

                while (!objListLin.NoFim())
                {
                    lindv = new Model.LinhaDocVenda();
                    lindv.IdCabecDoc = objListLin.Valor("idCabecDoc");
                    lindv.CodArtigo = objListLin.Valor("Artigo");
                    lindv.DescArtigo = objListLin.Valor("Descricao");
                    lindv.Quantidade = objListLin.Valor("Quantidade");
                    lindv.Unidade = objListLin.Valor("Unidade");
                    lindv.Desconto = objListLin.Valor("Desconto1");
                    lindv.PrecoUnitario = objListLin.Valor("Total");
                    lindv.TotalILiquido = objListLin.Valor("TotalILiquido");
                    lindv.TotalLiquido = objListLin.Valor("PrecoLiquido");
                    listlindv.Add(lindv);
                    objListLin.Seguinte();
                }

                dv.LinhasDoc = listlindv;
                return dv;
            }
            return null;
        }

        public static List<Model.DocVenda> GetClientOrders(string cliente, string filter)
        {

            StdBELista objListCab;
            StdBELista objListLin;
            StdBELista objListFat;
            Model.DocVenda dv = new Model.DocVenda();
            List<Model.DocVenda> listdv = new List<Model.DocVenda>();
            Model.LinhaDocVenda lindv = new Model.LinhaDocVenda();
            List<Model.LinhaDocVenda> listlindv = new
            List<Model.LinhaDocVenda>();

            if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
            {
                string sql = sql = "SELECT id, Entidade, Data, NumDoc, TotalMerc + TotalIva as Total, Serie From CabecDoc where TipoDoc='ECL' AND Entidade='" + cliente + "' ORDER BY Data DESC";
                objListCab = PriEngine.Engine.Consulta(sql);
                while (!objListCab.NoFim())
                {
                    dv = new Model.DocVenda();
                    dv.id = objListCab.Valor("id");
                    dv.Entidade = objListCab.Valor("Entidade");
                    dv.NumDoc = objListCab.Valor("NumDoc");
                    dv.Data = objListCab.Valor("Data");
                    dv.TotalMerc = objListCab.Valor("Total");
                    dv.Serie = objListCab.Valor("Serie");
                    //Verificar existência de uma fatura simplificada para determinar estado
                    string fatura = "SELECT * FROM CabecDoc WHERE TipoDoc='FR' AND RefDocOrig='" + dv.NumDoc + "'";
                    objListFat = PriEngine.Engine.Consulta(fatura);
                    if (objListFat.NumLinhas() == 0) //não existe fatura
                    {
                        dv.Estado = "Processing";
                    }
                    else
                    {
                        dv.Estado = "Sent";
                    }
                    //Linhas do Documento
                    string linhas = "SELECT idCabecDoc, Artigo, Descricao, Quantidade, Unidade, PrecUnit + TotalIva as Total, Desconto1, TotalILiquido, PrecoLiquido from LinhasDoc where IdCabecDoc='" + dv.id + "' order By NumLinha";
                    objListLin = PriEngine.Engine.Consulta(linhas);
                    listlindv = new List<Model.LinhaDocVenda>();

                    while (!objListLin.NoFim())
                    {
                        lindv = new Model.LinhaDocVenda();
                        lindv.IdCabecDoc = objListLin.Valor("idCabecDoc");
                        lindv.CodArtigo = objListLin.Valor("Artigo");
                        lindv.DescArtigo = objListLin.Valor("Descricao");
                        lindv.Quantidade = objListLin.Valor("Quantidade");
                        lindv.Unidade = objListLin.Valor("Unidade");
                        lindv.Desconto = objListLin.Valor("Desconto1");
                        lindv.PrecoUnitario = objListLin.Valor("Total");
                        lindv.TotalILiquido = objListLin.Valor("TotalILiquido");
                        lindv.TotalLiquido = objListLin.Valor("PrecoLiquido");

                        listlindv.Add(lindv);
                        objListLin.Seguinte();
                    }

                    dv.LinhasDoc = listlindv;
                    listdv.Add(dv);
                    objListCab.Seguinte();
                }
            }
            return listdv;
        }

        #endregion DocsVenda // -----------------------------  END   DOCVENDA    -----------------------

        #region Armazem

        public static List<Model.Armazem> ListaArmazens()
        {

            StdBELista objList;
            Model.Armazem arm = new Model.Armazem();
            List<Model.Armazem> listArms = new List<Model.Armazem>();

            if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
            {
                string armz = "SELECT Armazem, Descricao, Morada, Telefone FROM Armazens";
                objList = PriEngine.Engine.Consulta(armz);

                while (!objList.NoFim())
                {
                    listArms.Add(new Model.Armazem
                    {
                        Codigo = objList.Valor("Armazem"),
                        Nome = objList.Valor("Descricao"),
                        Stock = 0,
                        Morada = objList.Valor("Morada"),
                        Telefone = objList.Valor("Telefone")
                    });
                    objList.Seguinte();

                }

                return listArms;

            }
            else
            {
                return null;

            }

        }

        public static List<Model.Armazem> ListaArmazens(string prodId)
        {

            StdBELista objList;
            Model.Armazem arm = new Model.Armazem();
            List<Model.Armazem> listArms = new List<Model.Armazem>();

            if (PriEngine.InitializeCompany(SINFProject.Properties.Settings.Default.Company.Trim(), SINFProject.Properties.Settings.Default.User.Trim(), SINFProject.Properties.Settings.Default.Password.Trim()) == true)
            {
                string armz = "SELECT Armazens.Armazem, Descricao, Morada, Telefone, StkActual as Stock FROM Armazens JOIN ArtigoArmazem on Armazens.Armazem = ArtigoArmazem.Armazem WHERE Artigo = '" + prodId + "'";
                objList = PriEngine.Engine.Consulta(armz);

                while (!objList.NoFim())
                {
                    listArms.Add(new Model.Armazem
                    {
                        Codigo = objList.Valor("Armazem"),
                        Nome = objList.Valor("Descricao"),
                        Stock = objList.Valor("Stock"),
                        Morada = objList.Valor("Morada"),
                        Telefone = objList.Valor("Telefone")
                    });
                    objList.Seguinte();

                }

                return listArms;

            }
            else
            {
                return null;

            }

        }

        #endregion Armazem // -----------------------------  END   ARMAZEM    -----------------------
    }
}
