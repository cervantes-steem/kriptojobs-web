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
      layout: 'layoutKriptojobs', //Consultado (11-2015) en: http://sailsjs.org/documentation/concepts/views/layouts
    });
    /*return res.json({
      todo: 'index() is not implemented yet!'
    });*/
  },
	
};

