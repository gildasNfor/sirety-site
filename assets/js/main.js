function include(file) {   
    var script = document.createElement('script');
    script.src = file;
    script.type = 'text/javascript';
    script.defer = true;
    document.getElementsByTagName('head').item(0).appendChild(script);  
} 
/* Include Many js files */
include('assets/js/components/component-navigation.js');
include('assets/js/components/component-slider.js');
include('assets/js/components/component-google-map.js');
include('assets/js/components/component-custom-select.js');
include('assets/js/components/component-language-translate.js');
include('assets/js/components/component-popup.js');
include('assets/js/vendors/spotlight.min.js');