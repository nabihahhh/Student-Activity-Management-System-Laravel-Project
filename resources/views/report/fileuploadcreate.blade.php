<!doctype html>
<html>
  <head>
    <title>Vue in Browser</title>

    <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
    <link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">

  </head>
  <body>

    <div id="app">
        <file-pond></file-pond>
    </div>

    <script src="https://unpkg.com/filepond-plugin-image-preview"></script>
    <script src="https://unpkg.com/filepond"></script>
    <script src="https://unpkg.com/vue"></script>
    <script src="https://unpkg.com/vue-filepond"></script>

    <script>
    new Vue({
        el: '#app',
        components: {
            FilePond: vueFilePond.default(FilePondPluginImagePreview)
        }
    })
    </script>

  </body>
</html>