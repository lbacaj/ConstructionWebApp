using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace ConstructionWebApp.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "About Us.";

            return View();
        }

        public ActionResult Services()
        {
            ViewBag.Message = "Services.";

            return View();
        }

        public ActionResult Projects()
        {
            ViewBag.Message = "Projects.";

            return View();
        }

        public ActionResult ContactForm()
        {
            ViewBag.Message = "ContactForm.";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Contact Us.";

            return View();
        }
    }
}