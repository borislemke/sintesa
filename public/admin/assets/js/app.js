/// <reference path="typings/tsd.d.ts" />
NProgress.configure({ showSpinner: false });
var Matter;
(function (Matter) {
    var Controller = (function () {
        function Controller($rootScope, $location, $route, $scope, $mdDialog, $mdToast) {
            var self = this;
            self.title = 'Matter';
            // $rootScope.sideIsLocked = true;
            self.closeMenu = function () {
                $rootScope.activeMenu = $route.current.$$route.identifier;
                $rootScope.sideIsOpen = false;
            };
        }
        Controller.$inject = ["$rootScope", "$location", "$route", "$scope", "$mdDialog", "$mdToast"];
        return Controller;
    }());
    Matter.Controller = Controller;
    var Run = (function () {
        function Run($rootScope) {
            $rootScope.$on("$routeChangeStart", function (event, next, current) {
                $rootScope.isLoading = true;
                $rootScope.sideIsOpen = false;
                $rootScope.init = !current ? true : false;
                $rootScope.activeMenu = next.$$route ? next.$$route.identifier : 'dashboard';
                NProgress.start();
            });
            $rootScope.$on("$routeChangeSuccess", function (event, next, current) {
                $rootScope.isLoading = false;
                NProgress.done();
            });
        }
        Run.$inject = ['$rootScope'];
        return Run;
    }());
    Matter.Run = Run;
    var Config = (function () {
        function Config($routeProvider, $locationProvider) {
            $routeProvider.otherwise({ redirectTo: "/dashboard" });
            $locationProvider
                .html5Mode(true)
                .hashPrefix('!');
        }
        Config.$inject = ["$routeProvider", "$locationProvider"];
        return Config;
    }());
    Matter.Config = Config;
})(Matter || (Matter = {}));
angular
    .module("matter", [
    "ngRoute",
    "ngAnimate",
    "ngMaterial",
    "ngCordova",
    'ngSanitize',
    'matter.login',
    'matter.navbar',
    'matter.toolbar',
    "matter.myaccount",
    "matter.dashboard",
    "matter.content",
    "matter.settings",
    "matter.chat",
])
    .controller("MainCtrl", Matter.Controller)
    .config(Matter.Config)
    .run(Matter.Run);

/// <reference path="typings/tsd.d.ts" />
var Helper;
(function (Helper) {
    Helper.API_URL = 'http://matter.app/api/v1/';
    function toArray(obj, addKey) {
        console.log(obj);
        if (!angular.isObject(obj)) {
            return obj;
        }
        if (addKey === false) {
            return Object.keys(obj).map(function (key) {
                return obj[key];
            });
        }
        else {
            return Object.keys(obj).map(function (key) {
                var value = obj[key];
                var descriptor = {
                    configurable: true,
                    enumerable: false,
                    value: key
                };
                return angular.isObject(value) ?
                    Object.defineProperty(value, '$key', descriptor) : {
                    $key: key,
                    $value: value
                };
            });
        }
    }
    Helper.toArray = toArray;
    var Strings = (function () {
        function Strings() {
        }
        // Will be removed in production //
        /**
         * Converts dash-separated-string into camelCase
         * e.g. dash-separated-string => dashSeparatedString
         * @param input
         * @returns {string}
         */
        Strings.camelCase = function (input) {
            return input.toLowerCase().replace(/-(.)/g, function (match, group1) {
                return group1.toUpperCase();
            });
        };
        return Strings;
    }());
    Helper.Strings = Strings;
    var UI = (function () {
        function UI($mdToast) {
            var self = this;
            self.toaster = function (msg) {
                $mdToast.show($mdToast.simple()
                    .textContent(msg)
                    .position('bottom right')
                    .hideDelay(3000));
            };
        }
        UI.$inject = ['$mdToast'];
        return UI;
    }());
    Helper.UI = UI;
    var MListCtrl = (function () {
        function MListCtrl($http, $q, $time) {
            this.$http = $http;
            this.$q = $q;
            this.$time = $time;
            console.log('initaited');
            this.http = $http;
            // let self = this;
        }
        /**
         * Deletes multiple, selected items from a collection
         * Might need improvements as large collections might cripple performance
         * @param {Object} collection
         * @returns {Object} collection
         */
        MListCtrl.batchDelete = function (collection) {
            var selector = 'selected';
            var dirty = false;
            for (var item in collection) {
                if (collection.hasOwnProperty(item)) {
                    if (collection[item][selector]) {
                        dirty = true;
                        delete collection[item];
                    }
                }
            }
            return collection;
        };
        ;
        /**
         * Deletes an item from a collection. Returns the collection with items removed
         * Might need improvements as large collections might cripple performance
         * @param {String} key
         * @param {String} selector
         * @param {Object} collection
         * @returns {Object} collection
         */
        MListCtrl.deleteItemFromList = function (key, selector, collection) {
            for (var item in collection) {
                if (collection.hasOwnProperty(item)) {
                    if (collection[item][selector] === key) {
                        delete collection[item];
                    }
                }
            }
            return collection;
        };
        /**
         * Checks if all items inside a collection are selected
         * @param {Object} collection
         * @param {Object} condition
         * @returns {Boolean} selected
         */
        MListCtrl.listIsSelected = function (collection, condition) {
            // Converts object into array to validate length
            if (!!condition) {
                var filteredCollection = MListCtrl.filterListOnCondition(collection, condition);
                if (!filteredCollection.length)
                    return false;
            }
            else {
                if (!Object.keys(collection).length)
                    return false;
            }
            var selected = true;
            var selector = 'selected';
            for (var item in collection) {
                if (collection.hasOwnProperty(item)) {
                    if (!!condition) {
                        for (var key in condition) {
                            if (condition.hasOwnProperty(key) && collection[item][key] === condition[key] && !collection[item][selector]) {
                                selected = false;
                                break;
                            }
                        }
                    }
                    else {
                        if (collection[item][selector]) {
                            selected = false;
                            break;
                        }
                    }
                }
            }
            return selected;
        };
        /**
         * Checks if any items are selected in a collection
         * @param {Object} collection
         * @param {Object} condition
         * @returns {Boolean} dirty
         */
        MListCtrl.listIsDirty = function (collection, condition) {
            var dirty = false;
            var selector = 'selected';
            for (var item in collection) {
                if (collection.hasOwnProperty(item)) {
                    if (!!condition) {
                        for (var key in condition) {
                            if (condition.hasOwnProperty(key) && collection[item][selector] && collection[item][key] === condition[key]) {
                                dirty = true;
                                break;
                            }
                        }
                    }
                    else {
                        if (collection[item][selector]) {
                            dirty = true;
                            break;
                        }
                    }
                }
            }
            return dirty;
        };
        /**
         * Marks all items as selected in a collection
         * @param {Object} collection
         * @param {Object} condition
         * @returns {Object} collection
         */
        MListCtrl.selectAllInList = function (collection, condition) {
            var selector = 'selected';
            var selectItem = !MListCtrl.listIsSelected(collection, condition);
            for (var item in collection) {
                if (collection.hasOwnProperty(item)) {
                    if (collection.hasOwnProperty(item)) {
                        if (!!condition) {
                            for (var key in condition) {
                                if (condition.hasOwnProperty(key) && collection[item][key] === condition[key]) {
                                    collection[item][selector] = selectItem;
                                }
                            }
                        }
                        else {
                            collection[item][selector] = selectItem;
                        }
                    }
                }
            }
            return collection;
        };
        /**
         * Filters items in collection based on a given condition and returns items that match that condition
         * @param {Object} collection
         * @param {Object} condition
         * @returns {Array} matches
         */
        MListCtrl.filterListOnCondition = function (collection, condition) {
            var matches = [];
            for (var item in collection) {
                if (collection.hasOwnProperty(item)) {
                    for (var key in condition) {
                        if (condition.hasOwnProperty(key)) {
                            if (collection[item][key] && collection[item][key] === condition[key])
                                matches.push(collection[item]);
                        }
                    }
                }
            }
            return matches;
        };
        MListCtrl.$inject = ['$http', '$q', '$time'];
        return MListCtrl;
    }());
    Helper.MListCtrl = MListCtrl;
    var URLs = (function () {
        function URLs() {
        }
        /**
         * Converts FormData Object into URI encoded string
         * @param {Object} formData
         * @returns {string} param
         */
        URLs.params = function (formData) {
            var param = '';
            var identifier = 'id';
            for (var key in formData) {
                if (formData.hasOwnProperty(key)) {
                    param += '&' + formData[key][identifier] + '=' + formData[key];
                }
            }
            param = param.slice(1);
            // returns key_1=value_1&key_2=value_2[...]
            return param;
        };
        URLs.API_URL = 'http://pnkhotels.app/api/v1/';
        URLs.CHAT_URL = 'http://minuminum.com:3000';
        return URLs;
    }());
    Helper.URLs = URLs;
})(Helper || (Helper = {}));
angular
    .module('matter.helper.listitems', [])
    .service('listItemsCtrl', Helper.MListCtrl);

/// <reference path="typings/tsd.d.ts" />
var Services;
(function (Services) {
    var HttpService = (function () {
        function HttpService($http) {
            var _this = this;
            this.$http = $http;
            this.index = function (target) {
                return _this.$http.get(Helper.API_URL + target + '/index')
                    .then(function (response) {
                    return response;
                }, function (response) {
                    return response;
                });
            };
            this.get = function (id, target) {
                return _this.$http
                    .get(Helper.API_URL + target + '/get/' + id)
                    .then(function (response) {
                    return response;
                }, function (response) {
                    return response;
                });
            };
            this.create = function (formData, target) {
                return _this.$http
                    .post(Helper.API_URL + target + '/create', formData)
                    .then(function (response) {
                    console.log(response);
                    return response;
                }, function (response) {
                    return response;
                });
            };
            this.update = function (formData, target) {
                return _this.$http
                    .post(Helper.API_URL + target + '/update/', formData)
                    .then(function (response) {
                    return response;
                }, function (response) {
                    return response;
                });
            };
            this.destroy = function (id, target) {
                return _this.$http({
                    method: 'POST',
                    data: { id: id },
                    url: Helper.API_URL + target + '/destroy/' + id
                })
                    .then(function (response) {
                    return response;
                }, function (response) {
                    return response;
                });
            };
            this.destroyMultiple = function (collection, target) {
                var toBeDeleted = [];
                var selector = 'selected';
                var identifier = 'id';
                for (var item in collection) {
                    if (collection.hasOwnProperty(item)) {
                        if (collection[item][selector])
                            toBeDeleted.push(collection[item][identifier]);
                    }
                }
                return _this.$http({
                    method: 'POST',
                    url: Helper.API_URL + target + '/destroy',
                    data: { items: toBeDeleted },
                    header: {
                        'Content-Type': 'application/json'
                    }
                })
                    .then(function (response) {
                    return response;
                }, function (response) {
                    return response;
                });
            };
            console.log('HttpService module initialized');
        }
        HttpService.$inject = ['$http'];
        return HttpService;
    }());
    Services.HttpService = HttpService;
})(Services || (Services = {}));
angular
    .module('matter.http.service', [])
    .service('httpService', Services.HttpService);

var FilterDialog;
(function (FilterDialog) {
    var Controller = (function () {
        function Controller($mdDialog) {
            console.log('initiated');
            this.close = function () {
                $mdDialog.hide();
            };
        }
        Controller.$inject = ['$mdDialog'];
        return Controller;
    }());
    FilterDialog.Controller = Controller;
})(FilterDialog || (FilterDialog = {}));

var ListModule;
(function (ListModule) {
    var Controller = (function () {
        function Controller($scope, $element, $attrs) {
        }
        Controller.$inject = ['$scope', '$element', '$attrs'];
        return Controller;
    }());
    ListModule.Controller = Controller;
    var ListDirective = (function () {
        function ListDirective() {
            this.restrict = 'E';
            this.replace = true;
            this.templateUrl = 'templates/list-module.html';
            this.controller = Controller;
            this.controllerAs = 'listModCtrl';
            this.scope = {
                dataItems: '='
            };
        }
        return ListDirective;
    }());
    ListModule.ListDirective = ListDirective;
})(ListModule || (ListModule = {}));
angular
    .module('matter.module.lists', [])
    .directive(ListModule.ListDirective);

var Navbar;
(function (Navbar) {
    var Controller = (function () {
        function Controller($rootScope, $location) {
            this.menuItems = [
                {
                    title: 'Dashboard',
                    icon: 'trending_up',
                    identifier: 'dashboard',
                    link: 'dashboard'
                },
                {
                    title: 'Content',
                    icon: 'import_contacts',
                    identifier: 'content',
                    submenu: [
                        {
                            title: 'Rooms',
                            link: 'rooms'
                        },
                        {
                            title: 'Pages',
                            link: 'pages'
                        },
                        {
                            title: 'Footer Info',
                            link: 'footers'
                        }
                    ]
                },
                {
                    title: 'Settings',
                    icon: 'settings',
                    identifier: 'settings',
                    submenu: [
                        {
                            title: 'General',
                            link: 'settings-general'
                        },
                        {
                            title: 'Admins',
                            link: 'settings-admins'
                        }
                    ]
                },
                {
                    title: 'Messaging',
                    icon: 'chat_bubble_outline',
                    identifier: 'messaging',
                    link: 'messaging'
                }
            ];
            this.switchSideLock = function () {
                $rootScope.sideIsOpen = true;
                $rootScope.sideIsLocked = !$rootScope.sideIsLocked;
            };
            this.openMenu = function (menu) {
                $rootScope.activeMenu = menu;
                $rootScope.sideIsOpen = true;
            };
            this.navigate = function (link, tagger) {
                if (!!tagger) {
                    $rootScope.activeMenu = tagger;
                }
                $rootScope.sideIsLocked = false;
                $rootScope.sideIsOpen = false;
                $location.path(link);
            };
        }
        Controller.$inject = ['$rootScope', '$location'];
        return Controller;
    }());
    Navbar.Controller = Controller;
    function Directive() {
        return {
            restrict: 'E',
            templateUrl: 'templates/navbar.html',
            controller: Controller,
            controllerAs: 'navbarCtrl',
            replace: true
        };
    }
    Navbar.Directive = Directive;
})(Navbar || (Navbar = {}));
angular
    .module('matter.navbar', [])
    .directive('matterNavbar', Navbar.Directive);

var Toolbar;
(function (Toolbar) {
    var Controller = (function () {
        function Controller($rootScope, $location, $route) {
        }
        Controller.$inject = ['$rootScope', '$location', '$route'];
        return Controller;
    }());
    Toolbar.Controller = Controller;
    function Directive() {
        return {
            restrict: 'E',
            templateUrl: 'templates/toolbar.html',
            controller: Controller,
            controllerAs: 'toolbarCtrl',
            replace: true
        };
    }
    Toolbar.Directive = Directive;
})(Toolbar || (Toolbar = {}));
angular
    .module('matter.toolbar', [])
    .directive('matterToolbar', Toolbar.Directive);

angular
    .module('matter.content.footers', [
    'matter.content.footer.listing',
    'matter.content.footer.edit'
]);

angular
    .module('matter.content.pages', [
    'matter.content.pages.listing',
    'matter.content.pages.edit'
])
    .filter('toArray', Helper.toArray);

angular
    .module('matter.content.rooms', [
    'matter.content.rooms.listing',
    'matter.content.rooms.edit'
]);

var SettingsGeneral;
(function (SettingsGeneral) {
    var Controller = (function () {
        function Controller() {
            console.log('Settings page');
        }
        return Controller;
    }());
    SettingsGeneral.Controller = Controller;
    var Config = (function () {
        function Config($routeProvider) {
            $routeProvider
                .when('/settings-general', {
                templateUrl: 'templates/settings-general.html',
                controller: 'SettingsGeneralCtrl',
                controllerAs: 'settingsGeneralCtrl',
                identifier: 'settings'
            });
        }
        Config.$inject = ['$routeProvider'];
        return Config;
    }());
    SettingsGeneral.Config = Config;
})(SettingsGeneral || (SettingsGeneral = {}));
angular
    .module('matter.settings.general', [])
    .config(SettingsGeneral.Config)
    .controller('SettingsGeneralCtrl', SettingsGeneral.Controller);

var FooterEdit;
(function (FooterEdit) {
    var Controller = (function () {
        function Controller(footerData, $scope, $http, $mdDialog, $mdToast) {
            this.$inject = ['footerData', '$scope', '$http', '$mdDialog', '$mdToast'];
            var self = this;
            self.footer = footerData.data;
        }
        return Controller;
    }());
    FooterEdit.Controller = Controller;
    var Config = (function () {
        function Config($routeProvider) {
            $routeProvider
                .when('/footer-edit/:footerId', {
                templateUrl: 'templates/footer-edit.html',
                controller: 'FooterEditCtrl',
                controllerAs: 'footerCtrl',
                identifier: 'content',
                resolve: {
                    pagesData: function ($http, $timeout, $q) {
                        var defer = $q.defer();
                        $http.get('json/pages.json')
                            .then(function successCallback(response) {
                            $timeout(function () {
                                defer.resolve(response);
                            }, 10);
                        }, function errorCallback(response) {
                            console.log(response);
                        });
                        return defer.promise;
                    }
                }
            });
        }
        Config.$inject = ['$routeProvider'];
        return Config;
    }());
    FooterEdit.Config = Config;
})(FooterEdit || (FooterEdit = {}));
angular
    .module('matter.content.footer.edit', [])
    .config(FooterEdit.Config)
    .controller('FooterEditCtrl', FooterEdit.Controller);

var FooterListing;
(function (FooterListing) {
    var Controller = (function () {
        function Controller(pagesData, $scope, $http, $mdDialog, $mdToast) {
            this.$inject = ['pagesData', '$scope', '$http', '$mdDialog', '$mdToast'];
            var self = this;
            self.statusFilter = 1;
            self.pages = pagesData.data;
            self.openFilters = function ($event) {
                $mdDialog.show({
                    controller: FilterDialog.Controller,
                    controllerAs: 'filterDialogCtrl',
                    templateUrl: 'templates/filter-dialog.template.html',
                    targetEvent: $event,
                    clickOutsideToClose: true
                });
            };
            self.batchDelete = function (obj, $e) {
                self.pages = Helper.MListCtrl.batchDelete(obj);
            };
            self.deletePage = function (pageId, $event) {
                var confirm = $mdDialog.confirm()
                    .title('Delete this pages?')
                    .textContent('Are you sure to delete this page? This action cannot be undone!')
                    .ariaLabel('Delete page')
                    .ok('delete')
                    .targetEvent($event)
                    .cancel('cancel');
                $mdDialog.show(confirm).then(function () {
                    self.pages = Helper.MListCtrl.deleteItemFromList(pageId, 'id', self.pages);
                    $mdToast.show($mdToast.simple()
                        .textContent('Page has been deleted')
                        .position('bottom right')
                        .hideDelay(3000));
                });
            };
            self.listIsSelected = function (collection, condition) {
                return Helper.MListCtrl.listIsSelected(collection, condition);
            };
            self.selectAllInList = function (collection, condition) {
                self.pages = Helper.MListCtrl.selectAllInList(collection, condition);
            };
        }
        return Controller;
    }());
    FooterListing.Controller = Controller;
    var Config = (function () {
        function Config($routeProvider) {
            $routeProvider
                .when('/footers', {
                templateUrl: 'templates/footers-listing.html',
                controller: 'FooterListingCtrl',
                controllerAs: 'footersCtrl',
                identifier: 'content',
                resolve: {
                    pagesData: function ($http, $timeout, $q) {
                        var defer = $q.defer();
                        $http.get('json/pages.json')
                            .then(function successCallback(response) {
                            $timeout(function () {
                                defer.resolve(response);
                            }, 10);
                        }, function errorCallback(response) {
                            console.log(response);
                        });
                        return defer.promise;
                    }
                }
            });
        }
        Config.$inject = ['$routeProvider'];
        return Config;
    }());
    FooterListing.Config = Config;
})(FooterListing || (FooterListing = {}));
angular
    .module('matter.content.footer.listing', [])
    .config(FooterListing.Config)
    .controller('FooterListingCtrl', FooterListing.Controller)
    .filter('toArray', function () {
    return function (obj, addKey) {
        if (!angular.isObject(obj)) {
            return obj;
        }
        if (addKey === false) {
            return Object.keys(obj).map(function (key) {
                return obj[key];
            });
        }
        else {
            return Object.keys(obj).map(function (key) {
                var value = obj[key];
                return angular.isObject(value) ?
                    Object.defineProperty(value, '$key', {
                        configurable: true,
                        enumerable: false,
                        value: key
                    }) : {
                    $key: key,
                    $value: value
                };
            });
        }
    };
});

"use strict";
var PageEdit;
(function (PageEdit) {
    var Controller = (function () {
        function Controller(pageData, httpService, $scope, $timeout) {
            var _this = this;
            this.httpService = httpService;
            this.$scope = $scope;
            this.$timeout = $timeout;
            this.$inject = ['pageData', 'httpService', '$scope', '$timeout'];
            this.saveForm = function () {
                _this.httpService.create(_this.page, 'pages');
            };
            /**
             * Reorders module in the loaded page
             * @param {Object} module
             * @param {string} direction
             */
            this.moduleOrder = function (module, direction) {
                var order = 'order';
                var moduleOrder = module.order;
                var nextModule = moduleOrder + 1;
                var prevModule = moduleOrder - 1;
                for (var item in _this.page.content) {
                    if (_this.page.content.hasOwnProperty(item)) {
                        if (direction === 'up') {
                            if (_this.page.content[item][order] === prevModule) {
                                _this.page.content[item][order] = moduleOrder;
                                module.order = prevModule;
                            }
                        }
                        else {
                            if (_this.page.content[item][order] === nextModule) {
                                _this.page.content[item][order] = moduleOrder;
                                module.order = nextModule;
                            }
                        }
                    }
                }
            };
            /**
             * Removes module from page content
             * @param {Number} moduleId
             */
            this.removeModule = function (moduleId) {
                var order = 'order';
                for (var item in _this.page.content) {
                    if (_this.page.content.hasOwnProperty(item)) {
                        if (_this.page.content[item][order] === moduleId) {
                            delete _this.page.content[item];
                        }
                    }
                }
            };
            this.page = pageData.data;
            console.log(this.page);
            this.modules = {
                image_slider: {
                    "title": "Image Slider",
                    "description": "Show an image slider, usually best suited for the top of a page, may contain a single image for static banners"
                },
                rooms_module: {
                    "title": "Rooms List",
                    "description": "Show a list of rooms from a selected Hotel"
                },
                text_column: {
                    "title": "Text in Columns",
                    "description": "Show 1 - 3 columns with predefined text"
                },
                text_block_column: {
                    "title": "Text block with image",
                    "description": "Show 2 columns box with an image on the left"
                },
                custom_owner_text_block_column: {
                    "title": "Custom owner profile module",
                    "description": "This is a custom module which may not be available throughout the entire page"
                },
                image_column: {
                    "title": "Image Columns",
                    "description": "Show single to three columns images side by side"
                },
                testimony_slider: {
                    "title": "Testimony slider",
                    "description": "Create testimonies by customer, will incorporate automatic listing in the future"
                },
                image_gallery: {
                    "title": "Image Gallery",
                    "description": "Show an image gallery"
                },
                image_gallery_sortable: {
                    "title": "Filterable Image Gallery",
                    "description": "Show a gallery that users can filter out based on each image's given category"
                }
            };
        }
        return Controller;
    }());
    PageEdit.Controller = Controller;
    var Config = (function () {
        function Config($routeProvider) {
            $routeProvider
                .when('/page-edit/:pageId', {
                templateUrl: 'templates/page-edit.html',
                controller: 'PageEditCtrl',
                controllerAs: 'pageEditCtrl',
                identifier: 'content',
                resolve: {
                    pageData: ['$route', 'httpService', function ($route, httpService) {
                            return httpService.get($route.current.params.pageId, 'pages');
                        }]
                }
            });
        }
        Config.$inject = ['$routeProvider'];
        return Config;
    }());
    PageEdit.Config = Config;
})(PageEdit || (PageEdit = {}));
angular
    .module('matter.content.pages.edit', [
    'matter.http.service'
])
    .config(PageEdit.Config)
    .controller('PageEditCtrl', PageEdit.Controller);

///<reference path="../../../../helper.ts"/>
var PageListing;
(function (PageListing) {
    var Controller = (function () {
        function Controller($scope, $http, $mdDialog, $mdToast, httpService, pagesData) {
            var _this = this;
            this.openFilters = function ($event) {
                _this.$mdDialog.show({
                    controller: FilterDialog.Controller,
                    controllerAs: 'filterDialogCtrl',
                    templateUrl: 'templates/filter-dialog.template.html',
                    targetEvent: $event,
                    clickOutsideToClose: true
                });
            };
            this.deletePage = function (pageId, $event) {
                var confirm = _this.$mdDialog.confirm()
                    .title('Delete this pages?')
                    .textContent('Are you sure to delete this page? This action cannot be undone!')
                    .ariaLabel('Delete page')
                    .ok('delete')
                    .targetEvent($event)
                    .cancel('cancel');
                _this.$mdDialog.show(confirm).then(function () {
                    _this.pages = Helper.MListCtrl.deleteItemFromList(pageId, 'id', _this.pages);
                    _this.$mdToast.show(_this.$mdToast.simple()
                        .textContent('Page has been deleted')
                        .position('bottom right')
                        .hideDelay(3000));
                });
            };
            this.listIsDirty = function (collection, condition) {
                return Helper.MListCtrl.listIsDirty(collection, condition);
            };
            this.listIsSelected = function (collection, condition) {
                return Helper.MListCtrl.listIsSelected(collection, condition);
            };
            this.selectAllInList = function (collection, condition) {
                _this.pages = Helper.MListCtrl.selectAllInList(collection, condition);
            };
            this.batchDelete = function (collection, $e) {
                _this.httpService.destroyMultiple(collection, 'pages');
            };
            this.statusFilter = 1;
            this.pages = pagesData.data;
            this.$scope = $scope;
            this.$http = $http;
            this.$mdDialog = $mdDialog;
            this.$mdToast = $mdToast;
            this.httpService = httpService;
        }
        Controller.$inject = ['$scope', '$http', '$mdDialog', '$mdToast', 'httpService', 'pagesData'];
        return Controller;
    }());
    PageListing.Controller = Controller;
    var Config = (function () {
        function Config($routeProvider) {
            $routeProvider
                .when('/pages', {
                templateUrl: 'templates/pages-listing.html',
                controller: 'PageListingCtrl',
                controllerAs: 'pagesCtrl',
                identifier: 'content',
                resolve: {
                    pagesData: ['httpService', function (httpService) {
                            return httpService.index('pages');
                        }]
                }
            });
        }
        Config.$inject = ['$routeProvider'];
        return Config;
    }());
    PageListing.Config = Config;
})(PageListing || (PageListing = {}));
angular
    .module('matter.content.pages.listing', [
    'matter.http.service'
])
    .config(PageListing.Config)
    .controller('PageListingCtrl', PageListing.Controller);

var RoomEdit;
(function (RoomEdit) {
    var Controller = (function () {
        function Controller(roomData) {
            this.$inject = ['roomData'];
            this.room = roomData;
        }
        return Controller;
    }());
    RoomEdit.Controller = Controller;
    var Config = (function () {
        function Config($routeProvider) {
            $routeProvider
                .when('/room-edit/:roomId', {
                templateUrl: 'templates/room-edit.html',
                controller: 'RoomEditCtrl',
                controllerAs: 'roomEditCtrl',
                identifier: 'content',
                resolve: {
                    roomData: ['$route', 'httpService', function ($route, httpService) {
                            return httpService.get($route.current.params.roomId, 'rooms');
                        }]
                }
            });
        }
        Config.$inject = ['$routeProvider'];
        return Config;
    }());
    RoomEdit.Config = Config;
})(RoomEdit || (RoomEdit = {}));
angular
    .module('matter.content.rooms.edit', [])
    .config(RoomEdit.Config)
    .controller('RoomEditCtrl', RoomEdit.Controller);

var RoomListing;
(function (RoomListing) {
    var Controller = (function () {
        function Controller(roomsData) {
            this.$inject = ['roomsData'];
            this.rooms = roomsData.data;
        }
        return Controller;
    }());
    RoomListing.Controller = Controller;
    var Config = (function () {
        function Config($routeProvider) {
            $routeProvider
                .when('/rooms', {
                templateUrl: 'templates/room-listing.html',
                controller: 'RoomListingCtrl',
                controllerAs: 'roomsCtrl',
                identifier: 'content',
                resolve: {
                    roomsData: ['httpService', function (httpServicer) {
                            return httpServicer.index('rooms');
                        }]
                }
            });
        }
        Config.$inject = ['$routeProvider'];
        return Config;
    }());
    RoomListing.Config = Config;
})(RoomListing || (RoomListing = {}));
angular
    .module('matter.content.rooms.listing', [
    'matter.http.service'
])
    .config(RoomListing.Config)
    .controller('RoomListingCtrl', RoomListing.Controller)
    .filter('toArray', Helper.toArray);

var Chat;
(function (Chat) {
    var Controller = (function () {
        function Controller($rootScope) {
            console.log('Rooms page');
        }
        Controller.$inject = ['$rootScope'];
        return Controller;
    }());
    Chat.Controller = Controller;
    var Config = (function () {
        function Config($routeProvider) {
            $routeProvider.when('/messaging', {
                templateUrl: 'templates/chat.html',
                controller: 'ChatCtrl',
                controllerAs: 'chatCtrl',
                identifier: 'messaging'
            });
        }
        Config.$inject = ['$routeProvider'];
        return Config;
    }());
    Chat.Config = Config;
})(Chat || (Chat = {}));
angular
    .module('matter.chat', [])
    .config(Chat.Config)
    .controller('ChatCtrl', Chat.Controller);

var Content;
(function (Content) {
    var Controller = (function () {
        function Controller($http) {
            console.log('Settings page');
        }
        Controller.$inject = ['$http'];
        return Controller;
    }());
    Content.Controller = Controller;
})(Content || (Content = {}));
angular
    .module('matter.content', [
    'matter.content.rooms',
    'matter.content.pages',
    'matter.content.footers'
])
    .controller('contentCtrl', Content.Controller);

var Dashboard;
(function (Dashboard) {
    var Controller = (function () {
        function Controller() {
            var self = this;
            self.dashData = [
                {
                    date: '20160321',
                    value: 378,
                    percent: 5
                },
                {
                    date: '20160322',
                    value: 604,
                    percent: 8
                },
                {
                    date: '20160323',
                    value: 1134,
                    percent: 15
                },
                {
                    date: '20160324',
                    value: 2041,
                    percent: 27
                },
                {
                    date: '20160324',
                    value: 3175,
                    percent: 42
                },
                {
                    date: '20160324',
                    value: 4460,
                    percent: 59
                },
                {
                    date: '20160324',
                    value: 5065,
                    percent: 67
                },
                {
                    date: '20160324',
                    value: 5140,
                    percent: 68
                },
                {
                    date: '20160324',
                    value: 4838,
                    percent: 64
                }
            ];
            self.quickDashData = [
                {
                    metric: 'views',
                    data: {
                        total: 24437
                    }
                },
                {
                    metric: 'likes',
                    data: {
                        total: 3795
                    }
                },
                {
                    metric: 'followers',
                    data: {
                        total: 927
                    }
                },
                {
                    metric: 'shares',
                    data: {
                        total: 791
                    }
                }
            ];
        }
        return Controller;
    }());
    Dashboard.Controller = Controller;
    var Config = (function () {
        function Config($routeProvider) {
            $routeProvider.when('/dashboard', {
                templateUrl: 'templates/dashboard.html',
                controller: 'DashboardCtrl',
                controllerAs: 'dashboardCtrl',
                identifier: 'dashboard'
            });
        }
        Config.$inject = ['$routeProvider'];
        return Config;
    }());
    Dashboard.Config = Config;
})(Dashboard || (Dashboard = {}));
angular
    .module('matter.dashboard', [])
    .config(Dashboard.Config)
    .controller('DashboardCtrl', Dashboard.Controller);

var Login;
(function (Login) {
    var Controller = (function () {
        function Controller() {
            var self = this;
        }
        return Controller;
    }());
    Login.Controller = Controller;
    var Config = (function () {
        function Config($routeProvider) {
            $routeProvider.when('/login', {
                templateUrl: 'templates/login.html',
                controller: 'LoginCtrl',
                controllerAs: 'loginCtrl',
                identifier: 'login'
            });
        }
        Config.$inject = ['$routeProvider'];
        return Config;
    }());
    Login.Config = Config;
})(Login || (Login = {}));
angular
    .module('matter.login', [])
    .config(Login.Config)
    .controller('LoginCtrl', Login.Controller);

var MyAccount;
(function (MyAccount) {
    var Controller = (function () {
        function Controller() {
            console.log('Rooms page');
        }
        return Controller;
    }());
    MyAccount.Controller = Controller;
    var Config = (function () {
        function Config($routeProvider) {
            $routeProvider.when('/my-account', {
                templateUrl: 'templates/myaccount.html',
                controller: 'MyAccountCtrl',
                controllerAs: 'myAccountCtrl',
                identifier: 'myaccount'
            });
        }
        Config.$inject = ['$routeProvider'];
        return Config;
    }());
    MyAccount.Config = Config;
})(MyAccount || (MyAccount = {}));
angular
    .module('matter.myaccount', [])
    .config(MyAccount.Config)
    .controller('MyAccountCtrl', MyAccount.Controller);

var Settings;
(function (Settings) {
    var Controller = (function () {
        function Controller() {
            console.log('Settings page');
        }
        return Controller;
    }());
    Settings.Controller = Controller;
})(Settings || (Settings = {}));
angular
    .module('matter.settings', [
    'matter.settings.general'
])
    .controller('SettingsCtrl', Settings.Controller);
