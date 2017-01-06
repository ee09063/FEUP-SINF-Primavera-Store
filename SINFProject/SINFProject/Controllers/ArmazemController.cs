using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using SINFProject.Lib_Primavera.Model;

namespace SINFProject.Controllers
{
    public class ArmazensController : ApiController
    {
        //GET ALL
        public IEnumerable<Lib_Primavera.Model.Armazem> Get()
        {
            return Lib_Primavera.PriIntegration.ListaArmazens();
        }

        //GET INFO DE UM ARTIGO 
        public IEnumerable<Lib_Primavera.Model.Armazem> Get(string id)
        {
            return Lib_Primavera.PriIntegration.ListaArmazens(id);
        }
    }
}