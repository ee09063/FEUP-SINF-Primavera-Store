using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using SINFProject.Lib_Primavera.Model;

namespace SINFProject.Controllers
{
    public class ArtigosController : ApiController
    {
        // GET ALL
        public IEnumerable<Lib_Primavera.Model.Artigo> Get()
        {
            return Lib_Primavera.PriIntegration.ListaArtigos();
        }

        //GET ARTIGO SEGUND CATEGORIA E TITULO
        public IEnumerable<Lib_Primavera.Model.Artigo> Get(string title, string cat)
        {
            return Lib_Primavera.PriIntegration.ListaArtigos(title, cat);
        }

        //GET UM ARTIGO
        public Artigo Get(string id)
        {
            Artigo artigo = Lib_Primavera.PriIntegration.GetArtigo(id); ;
            if (artigo == null)
            {
                throw new HttpResponseException(
                  Request.CreateResponse(HttpStatusCode.NotFound));
            }
            else
            {
                return artigo;
            }
        }
    }
}