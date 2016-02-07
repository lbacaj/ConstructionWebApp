using System.Web;
using System.Web.Optimization;

namespace ConstructionWebApp
{
    public class BundleConfig
    {
        // For more information on bundling, visit http://go.microsoft.com/fwlink/?LinkId=301862
        public static void RegisterBundles(BundleCollection bundles)
        {
            bundles.Add(new ScriptBundle("~/bundles/jquery").Include(
                        "~/Scripts/jquery-{version}.js"));

            bundles.Add(new ScriptBundle("~/bundles/jqueryval").Include(
                        "~/Scripts/jquery.validate*"));

            // Use the development version of Modernizr to develop with and learn from. Then, when you're
            // ready for production, use the build tool at http://modernizr.com to pick only the tests you need.
            bundles.Add(new ScriptBundle("~/bundles/modernizr").Include(
                        "~/Scripts/modernizr-*"));

            bundles.Add(new ScriptBundle("~/bundles/bootstrap").Include(
                      "~/Scripts/jquery-migrate-1.2.1.min.js",
                      "~/Scripts/jquery.themepunch.tools.min.js",
                      "~/Scripts/jquery.themepunch.revolution.min.js",
                      "~/Scripts/jquery.ba-bbq.min.js",
                      "~/Scripts/jquery-ui-1.11.4.custom.min.js",
                      "~/Scripts/jquery.ui.touch-punch.min.js",
                      "~/Scripts/jquery.isotope.min.js",
                      "~/Scripts/jquery.easing.1.3.min.js",
                      "~/Scripts/jquery.carouFredSel-6.2.1.min.js",
                      "~/Scripts/jquery.touchSwipe.min.js",
                      "~/Scripts/jquery.transit.min.js",
                      "~/Scripts/jquery.hint.min.js",
                      "~/Scripts/jquery.costCalculator.min.js",
                      "~/Scripts/jquery.parallax.min.js",
                      "~/Scripts/jquery.prettyPhoto.js",
                      "~/Scripts/jquery.qtip.min.js",
                      "~/Scripts/jquery.blockUI.min.js",
                      "~/Scripts/main.js",
                      "~/Scripts/odometer.min.js"
                      ));

            bundles.Add(new StyleBundle("~/Content/css").Include(
                      "~/Content/reset.css",
                      "~/Content/superfish.css",
                      "~/Content/prettyPhoto.css",
                      "~/Content/jquery.qtip.css",
                      "~/Content/style.css",
                      "~/Content/animations.css",
                      "~/Content/responsive.css",
                      "~/Content/odometer-theme-default.css"
                      ));
        }
    }
}
