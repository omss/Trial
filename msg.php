            <div class="row header-bg-color"> </div>            <div class="row">                <div class="col-xs-12 col-md-10 col-md-offset-1">                    <div class="page-header">                        <div class="alert alert-success">                            <strong>تنبيه!</strong> <p class=" <?= (isset($msgType) && $msgType == 'error')? 'error' : 'succeed'; ?>"> <?php echo $msg;?></p>                        </div>                    </div><!--page-header End -->                </div>            </div>