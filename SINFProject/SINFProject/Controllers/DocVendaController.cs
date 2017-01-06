using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using SINFProject.Lib_Primavera.Model;


namespace SINFProject.Controllers
{
    public class EncomendasController : ApiController
    {
        //GET ALL
        public IEnumerable<Lib_Primavera.Model.DocVenda> Get()
        {
            return Lib_Primavera.PriIntegration.Encomendas_List();
        }

        //GET ENCOMENDA DE CLIENTE
        public IEnumerable<Lib_Primavera.Model.DocVenda> Get(string id, string filter)
        {
            return Lib_Primavera.PriIntegration.GetClientOrders(id,filter);
        }

        //GET DOC
        public Lib_Primavera.Model.DocVenda Get(string id)
        {
            Lib_Primavera.Model.DocVenda docvenda = Lib_Primavera.PriIntegration.Encomenda_Get(id);
            if (docvenda == null)
            {
                throw new HttpResponseException(
                        Request.CreateResponse(HttpStatusCode.NotFound));

            }
            else
            {
                return docvenda;
            }
        }

        //CRIAR ENCOMENDA
        public HttpResponseMessage Post(Lib_Primavera.Model.DocVenda dv)
        {
            Lib_Primavera.Model.RespostaErro erro = new Lib_Primavera.Model.RespostaErro();
            erro = Lib_Primavera.PriIntegration.Encomendas_New(dv);

            if (erro.Erro == 0)
            {
                var response = Request.CreateResponse(
                   HttpStatusCode.Created, dv.id);
                string uri = Url.Link("DefaultApi", new { DocId = dv.id });
                response.Headers.Location = new Uri(uri);
                return response;
            }

            else
            {
                return Request.CreateResponse(HttpStatusCode.BadRequest);
            }

        }
    }

}
