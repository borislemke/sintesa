/// <reference path="typings/tsd.d.ts" />
var MatterCordova;
(function (MatterCordova) {
    "use strict";
    var Application;
    (function (Application) {
        function initialize() {
            document.addEventListener("deviceready", function () {
                console.log("Bootstrapping AngularJS into Cordova");
                angular.bootstrap(document.body, ["matter"]);
                onDeviceReady();
            }, false);
        }
        Application.initialize = initialize;
        function onDeviceReady() {
            // Handle the Cordova pause and resume events
            document.addEventListener('pause', onPause, false);
            document.addEventListener('resume', onResume, false);
            // TODO: Cordova has been loaded. Perform any initialization that requires Cordova here.
        }
        function onPause() {
            // TODO: This application has been suspended. Save application state here.
        }
        function onResume() {
            // TODO: This application has been reactivated. Restore application state here.
        }
    })(Application = MatterCordova.Application || (MatterCordova.Application = {}));
    window.onload = function () {
        if (window.cordova) {
            Application.initialize();
        }
        else {
            console.log("Bootstrapping AngularJS into browser");
            angular.bootstrap(document.body, ["matter"]);
        }
    };
})(MatterCordova || (MatterCordova = {}));
