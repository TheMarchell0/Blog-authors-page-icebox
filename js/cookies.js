(function (window, undefined){
   "use strict";

   var document = window.document;

   function log() {
      if (window.console && window.console.log) {
         for (var x in arguments) {
            if (arguments.hasOwnProperty(x)) {
               window.console.log(arguments[x]);
            }
         }
      }
   }

   function AcceptCookie() {
      if (!(this instanceof AcceptCookie)) {
         return new AcceptCookie();
      }

      this.init.call(this);

      return this;
   }

   AcceptCookie.prototype = {

      init: function () {
         var self = this;

         if (document.getElementById('pjAcceptCookieBar')) {
            if(self.readCookie('pjAcceptCookie') == null)
            {
               document.getElementById('pjAcceptCookieBar').classList.remove('hide-cookie');
               self.bindCookieBar();
            } 
         }

         var clear_cookie_arr = self.getElementsByClass("pjClearCookie", null, "a");
         if(clear_cookie_arr.length > 0)
         {
            self.addEvent(clear_cookie_arr[0], "click", function (e) {
               if (e.preventDefault) {
                  e.preventDefault();
               }
               self.eraseCookie('pjAcceptCookie');
               document.location.reload();
               return false;
            });
         }
      },
      getElementsByClass: function (searchClass, node, tag) {
         var classElements = new Array();
         if (node == null) {
            node = document;
         }
         if (tag == null) {
            tag = '*';
         }
         var els = node.getElementsByTagName(tag);
         var elsLen = els.length;
         var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
         for (var i = 0, j = 0; i < elsLen; i++) {
            if (pattern.test(els[i].className)) {
               classElements[j] = els[i];
               j++;
            }
         }
         return classElements;
      },
      addEvent: function (obj, type, fn) {
         if (obj.addEventListener) {
            obj.addEventListener(type, fn, false);
         } else if (obj.attachEvent) {
            obj["e" + type + fn] = fn;
            obj[type + fn] = function() { obj["e" + type + fn](window.event); };
            obj.attachEvent("on" + type, obj[type + fn]);
         } else {
            obj["on" + type] = obj["e" + type + fn];
         }
      },
      createCookie: function (name, value, days){
         var expires;
         if (days) {
            var date = new Date();
            date.setTime(date.getTime()+(days*24*60*60*1000));
            expires = "; expires="+date.toGMTString();
         } else {
            expires = "";
         }
         document.cookie = name+"="+value+expires+"; path=/";
      },
      readCookie: function (name) {
         var nameEQ = name + "=";
         var ca = document.cookie.split(';');
         for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                  c = c.substring(1,c.length);
            }
            if (c.indexOf(nameEQ) === 0) {
                  return c.substring(nameEQ.length,c.length);
            }
         }
         return null;
      },
      eraseCookie: function (name) {
         var self = this;
         self.createCookie(name,"",-1);
      },
      bindCookieBar: function(){
         var self = this;
         var btn_arr = self.getElementsByClass("pjAcceptCookieBarBtn", null, "button");
         var scrollFlag = true;
         if(btn_arr.length > 0)
         {
         self.addEvent(btn_arr[0], "click", function (e) {
            if (e.preventDefault) {
               e.preventDefault();
            }
            self.createCookie('pjAcceptCookie', 'YES', 365);

            document.getElementById("pjAcceptCookieBar").remove();
            return false;
         });
         
         setTimeout(() => {
            if(self.readCookie('pjAcceptCookie') == null) {
               self.createCookie('pjAcceptCookie', 'YES', 365);
               document.getElementById("pjAcceptCookieBar").remove();
               scrollFlag = false;
            }
         }, 8000);
         
         window.addEventListener('scroll', function() {
            if(self.readCookie('pjAcceptCookie') == null && scrollFlag) {
               self.createCookie('pjAcceptCookie', 'YES', 365);
               document.getElementById("pjAcceptCookieBar").remove();
               scrollFlag = false;
               return false;
            }
         });
         }
      }
   };

   window.AcceptCookie = AcceptCookie;
})(window);

window.onload = function() {
   AcceptCookie = AcceptCookie();
}