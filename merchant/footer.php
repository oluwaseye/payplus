

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/jquery.cookies.js"></script>
        
        <script src="js/flot/jquery.flot.min.js"></script>
        <script src="js/flot/jquery.flot.resize.min.js"></script>
        <script src="js/flot/jquery.flot.spline.min.js"></script>
        <script src="js/jquery.sparkline.min.js"></script>
        <script src="js/morris.min.js"></script>
        <script src="js/raphael-2.1.0.min.js"></script>
        <script src="js/bootstrap-wizard.min.js"></script>

        <script src="js/bootstrap-timepicker.min.js"></script>

        <script src="js/select2.min.js"></script>

<script src="js/codemirror/codemirror.js"></script>
        <script src="js/codemirror/formatting.js"></script>
        <script src="js/codemirror/mode/xml.js"></script>
        <script src="js/codemirror/mode/javascript.js"></script>
        <script src="js/custom.js"></script>
        
        <script src="js/app.js"></script>

<script>
jQuery(document).ready(function() {
        jQuery('#datepicker').datepicker();
    });
</script>
<script>
 
            CodeMirror.fromTextArea(document.getElementById("code"), {
                mode: {name: "xml", alignCDATA: true},
                lineNumbers: true
            });
            
            CodeMirror.fromTextArea(document.getElementById("code2"), {
                mode: {name: "javascript"},
                lineNumbers: true,
                theme: 'ambiance'
            });
            
            var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
                mode: {name: "javascript"},
                lineNumbers: true,
            });
            CodeMirror.commands["selectAll"](editor);
            
            function getSelectedRange() {
                return { from: editor.getCursor(true), to: editor.getCursor(false) };
            }
              
            function autoFormatSelection() {
                var range = getSelectedRange();
                editor.autoFormatRange(range.from, range.to);
            }
              
            function commentSelection(isComment) {
                var range = getSelectedRange();
                editor.commentRange(isComment, range.from, range.to);
            }
            
            jQuery(document).ready(function(){
                
                jQuery('.autoformat').click(function(){
                    autoFormatSelection();
                });
                
                jQuery('.comment').click(function(){
                    commentSelection(true);
                });
                
                jQuery('.uncomment').click(function(){
                    commentSelection(false);
                });
            
            });
          
</script>
 <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>
        <script src="js/dataTables.responsive.js"></script>
            <script>
            jQuery(document).ready(function(){
                
                jQuery('#basicTable').DataTable({
                    responsive: true
                });
                
                var shTable = jQuery('#shTable').DataTable({
                    "fnDrawCallback": function(oSettings) {
                        jQuery('#shTable_paginate ul').addClass('pagination-active-dark');
                    },
                    responsive: true
                });
                
                // Show/Hide Columns Dropdown
                jQuery('#shCol').click(function(event){
                    event.stopPropagation();
                });
                
                jQuery('#shCol input').on('click', function() {

                    // Get the column API object
                    var column = shTable.column($(this).val());
 
                    // Toggle the visibility
                    if ($(this).is(':checked'))
                        column.visible(true);
                    else
                        column.visible(false);
                });
                
                var exRowTable = jQuery('#exRowTable').DataTable({
                    responsive: true,
                    "fnDrawCallback": function(oSettings) {
                        jQuery('#exRowTable_paginate ul').addClass('pagination-active-success');
                    },
                    "ajax": "ajax/objects.txt",
                    "columns": [
                        {
                            "class":          'details-control',
                            "orderable":      false,
                            "data":           null,
                            "defaultContent": ''
                        },
                        { "data": "name" },
                        { "data": "position" },
                        { "data": "office" },
                        { "data": "salary" }
                    ],
                    "order": [[1, 'asc']] 
                });
                
                // Add event listener for opening and closing details
                jQuery('#exRowTable tbody').on('click', 'td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = exRowTable.row( tr );
             
                    if ( row.child.isShown() ) {
                        // This row is already open - close it
                        row.child.hide();
                        tr.removeClass('shown');
                    }
                    else {
                        // Open this row
                        row.child( format(row.data()) ).show();
                        tr.addClass('shown');
                    }
                });
               
                
                // DataTables Length to Select2
                jQuery('div.dataTables_length select').removeClass('form-control input-sm');
                jQuery('div.dataTables_length select').css({width: '60px'});
                jQuery('div.dataTables_length select').select2({
                    minimumResultsForSearch: -1
                });
    
            });
            
            function format (d) {
                // `d` is the original data object for the row
                return '<table class="table table-bordered nomargin">'+
                    '<tr>'+
                        '<td>Full name:</td>'+
                        '<td>'+d.name+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Extension number:</td>'+
                        '<td>'+d.extn+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>Extra info:</td>'+
                        '<td>And any further details here (images etc)...</td>'+
                    '</tr>'+
                '</table>';
            }
        </script>

    </body>
</html>