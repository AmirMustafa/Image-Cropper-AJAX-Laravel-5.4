(function (root, factory) {
  'use strict';
  var isElectron = typeof module === 'object' && process && process.versions && process.versions.electron;
  if (!isElectron && typeof module === 'object') {
    module.exports = factory;
  } else if (typeof define === 'function' && define.amd) {
    define(function() {
        return factory;
    });
  } else {
    root.MediumEditorTable = factory;
  }
}(this, function () {

  'use strict';
