using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;

namespace SINFProject.Lib_Primavera.Model
{
    public class Artigo
    {
        public string Codigo
        {
            get;
            set;
        }

        public string Nome
        {
            get;
            set;
        }

        public string Desc
        {
            get;
            set;
        }

        public double Preco
        {
            get;
            set;
        }

        public double Stock
        {
            get;
            set;
        }

        public int PrazoEntrega
        {
            get;
            set;
        }

        public String Categoria
        {
            get;
            set;
        }

        public String Autor
        {
            get;
            set;
        }

        public String IVA
        {
            get;
            set;
        }

    }
}
