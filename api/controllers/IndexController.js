/**
 * IndexController
 *
 * @description :: Server-side logic for managing indices
 * @help        :: See http://sailsjs.org/#!/documentation/concepts/Controllers
 */

module.exports = {

  /**
   * `IndexController.index()`
   */
  index: function (req, res) {
    return res.view('index',{
      layout: 'layoutKriptojobs',
    });
    /*return res.json({
      todo: 'index() is not implemented yet!'
    });*/
  },


  /**
   * `IndexController.perfilFreelancer()`
   */
  perfilFreelancer: function (req, res) {
    return res.view('perfil-freelancer',{
      layout: 'layoutKriptojobs',
    });
    /*return res.json({
      todo: 'perfilFreelancer() is not implemented yet!'
    });*/
  },


  /**
   * `IndexController.perfilFreelancerCarga()`
   */
  perfilFreelancerCarga: function (req, res) {
    return res.view('perfil-freelancer-carga',{
      layout: 'layoutKriptojobs',
    });
    /*return res.json({
      todo: 'perfilFreelancerCarga() is not implemented yet!'
    });*/
  },


  /**
   * `IndexController.busquedaFreelancer()`
   */
  busquedaFreelancer: function (req, res) {
    return res.view('b-freelancer',{
      layout: 'layoutKriptojobs',
    });
    /*return res.json({
      todo: 'busquedaFreelancer() is not implemented yet!'
    });*/
  },


  /**
   * `IndexController.busquedaEmpleo()`
   */
  busquedaEmpleo: function (req, res) {
    return res.view('b-empleo',{
      layout: 'layoutKriptojobs',
    });
    /*return res.json({
      todo: 'busquedaEmpleo() is not implemented yet!'
    });*/
  },


  /**
   * `IndexController.solicitudEmpleo()`
   */
  solicitudEmpleo: function (req, res) {
    return res.view('p-solicitud-empleo',{
      layout: 'layoutKriptojobs',
    });
    /*return res.json({
      todo: 'solicitudEmpleo() is not implemented yet!'
    });*/
  },
	
};

