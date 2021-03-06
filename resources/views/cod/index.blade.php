<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Tilia + DePanther WXRE</title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="https://riset.its.ac.id/praktikum/vlab-pengolahanlimbah/cod/TemplateData/favicon.ico">
    <link rel="stylesheet" href="https://riset.its.ac.id/praktikum/vlab-pengolahanlimbah/cod/TemplateData/style.css">
    <script src="https://riset.its.ac.id/praktikum/vlab-pengolahanlimbah/cod/TemplateData/UnityProgress.js"></script>
    <script src="https://riset.its.ac.id/praktikum/vlab-pengolahanlimbah/cod/Build/UnityLoader.js"></script>
    <script>
      UnityLoader.compatibilityCheck = function (unityInstance, onsuccess, onerror) {
        if (!UnityLoader.SystemInfo.hasWebGL) {
          unityInstance.popup('Your browser does not support WebGL',
            [{text: 'OK', callback: onerror}]);
        } else {
          onsuccess();
        }
      }
      var unityInstance = UnityLoader.instantiate("unityContainer", "https://riset.its.ac.id/praktikum/vlab-pengolahanlimbah/cod/Build/dicobabram.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <div class="webgl-content">
      <div id="unityContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <button class="entervr" id="entervr" value="Enter VR" disabled>VR</button>
        <button class="enterar" id="enterar" value="Enter AR" disabled>AR</button>
        <div class="webxr-link">Using <a href="https://github.com/De-Panther/unity-webxr-export" target="_blank" title="WebXR Export">WebXR Export</a></div>
        <div class="title">Tilia + DePanther WXRE</div>
      </div>
    </div>
    <script>
      let enterARButton = document.getElementById('enterar');
      let enterVRButton = document.getElementById('entervr');
      
      document.addEventListener('onARSupportedCheck', function (event) {
        enterARButton.disabled = !event.detail.supported;
      }, false);
      document.addEventListener('onVRSupportedCheck', function (event) {
        enterVRButton.disabled = !event.detail.supported;
      }, false);
      
      enterARButton.addEventListener('click', function (event) {
        document.dispatchEvent(new CustomEvent('toggleAR', {}));
      }, false);
      enterVRButton.addEventListener('click', function (event) {
        document.dispatchEvent(new CustomEvent('toggleVR', {}));
      }, false);
    </script>
  </body>
</html>
