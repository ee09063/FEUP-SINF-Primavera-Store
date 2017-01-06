using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;

namespace SINFProject.Lib_Primavera.Model
{
    public class Armazem
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

        public string Morada
        {
            get;
            set;
        }

        public string Telefone
        {
            get;
            set;
        }

        public double Stock
        {
            get;
            set;
        }
    }
}
