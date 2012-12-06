<!doctype html>
<html>
<head>
    <script type="text/javascript" src="../../js/case.js"></script>
    <?php $uri = '../../../src/'; include '../../../src/include.php'; ?>
</head>
<body class="simple">
    <script type="text/javascript">
        rangy.init();
    </script>
    <div class="test-1">
        <h1>Right Float Button 1: Float Image - No Text</h1>
        <div class="test-input">
            <div class="editible">
                {<img src="../../images/raptor.png" alt="raptor logo" height="50" width="40" />} 
                    <div style="clear: both">
                    </div>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                {<img src="../../images/raptor.png" alt="raptor logo" height="50" width="40" class="cms-float-right"  />}
                    <div style="clear: both">
                    </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-1', function(input) {
            input.find('.editible').data('editor').getLayout().getElement().find('.raptor-ui-float-right').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>
    
    <div class="test-2">
        <h1>Right Float Button 2: Float Image With Text </h1>
        <div class="test-input">
            <div class="editible">
                {<img src="../../images/raptor.png" alt="raptor logo" height="50" width="40"/>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.}
                </p>
                <div style="clear: both">
                    </div>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                {<img src="../../images/raptor.png" alt="raptor logo" height="50" width="40" class="cms-float-right"  />
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.}
                </p>
                <div style="clear: both">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-2', function(input) {
            input.find('.editible').data('editor').getLayout().getElement().find('.raptor-ui-float-right').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>
    
    
</body>
</html>