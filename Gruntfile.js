module.exports = function(grunt) {

  var slug        = 'wp-translations-tester',
      path        = '$PWD/languages/',
      user        = grunt.option('user'),
      token       = grunt.option('token')

  // Load multiple grunt tasks using globbing patterns
  require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        makepot: {
            target: {
                options: {
                    cwd: '',                          // Directory of files to internationalize.
                    domainPath: '/languages',                   // Where to save the POT file.
                    exclude: [],                      // List of files or directories to ignore.
                    include: [],                      // List of files or directories to include.
                    mainFile: 'wp-translations-tester.php',                     // Main project file.
                    potComments: '',                  // The copyright at the beginning of the POT file.
                    potFilename: 'wp-translations-tester.pot',                  // Name of the POT file.
                    potHeaders: {
                        poedit: true,                 // Includes common Poedit headers.
                        'x-poedit-keywordslist': true // Include a list of all possible gettext functions.
                    },                                // Headers to add to the generated POT file.
                    processPot: null,                 // A callback function for manipulating the POT file.
                    type: 'wp-plugin',                // Type of project (wp-plugin or wp-theme).
                    updateTimestamp: true,            // Whether the POT-Creation-Date should be updated without other changes.
                    updatePoFiles: false              // Whether to update PO files in the same directory as the POT file.
                }
            }
        },
        exec: {
          push: {
            command: 'curl -i -X POST '
                   + '-H "Content-Type: multipart/form-data" '
                   + '-H "Accept: application/xml" -H "X-Auth-User: '
                   + user
                   + '" -H "X-Auth-Token: '
                   + token
                   + '" -F "file=@' + path + slug +'.pot" '
                   + '-F "hash= md5sum "' + slug + '.pot" | awk \'{print }\'" '
                   + '-F first=true -F last=true '
                   + '-F "type=GETTEXT" '
                   + '"https://translate.wp-translations.pro/rest/file/source/' + slug + '/stable?docId=' + slug + '"'
          }

        }
    });

    // Default task. - grunt makepot
  grunt.registerTask('default', ['makepot']);
  grunt.registerTask('push', ['exec:push']);

};
