using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(ConstructionWebApp.Startup))]
namespace ConstructionWebApp
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
