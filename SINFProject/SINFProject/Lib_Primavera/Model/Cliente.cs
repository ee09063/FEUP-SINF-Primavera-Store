using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;

namespace SINFProject.Lib_Primavera.Model
{
    public class Cliente
    {
        public string CodCliente
        {
            get;
            set;
        }

        public string NomeCliente
        {
            get;
            set;
        }

        public string Morada
        {
            get;
            set;
        }

        public string NumContribuinte
        {
            get;
            set;
        }

        public string Contacto
        {
            get;
            set;
        }
    }
}
