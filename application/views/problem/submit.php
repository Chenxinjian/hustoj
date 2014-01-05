<?php echo Form::open('/problem/submit', array('class'=>'form-horizontal submit'));?>
<form role="form" class="form-horizontal submit" action="/problem/submit" method="POST">
<fieldset>
<?php if (isset($cid) AND isset($cpid)):?>
    <input type="hidden" value="<?php echo($cid);?>" name="cid"/>
    <input type="hidden" value="<?php echo($cpid);?>" name="cpid"/>
    <div style="margin: 20px auto 10px; font-size: 14px; text-align: center;">
        <h3>Problem <span class="label label-danger"><?php echo(OJ::contest_pid($cpid));?></span>  Of Contest <span class="label label-primary"><?php echo($cid); ?></span></h3>
    </div>
<?php else: ?>
<div class="form-group">
    <label class="control-label col-sm-3" for="pid">Problem ID</label>
    <div class="col-sm-9">
        <input class="form-control" name="pid" value="<?php echo($pid);?>">
    </div>
</div>
<?php endif;?>
<div class="form-group">
    <label for="language" class="control-label col-sm-3">Language</label>
    <div class="col-sm-9">
        <select name="language" class="form-control">
        <?php foreach(OJ::$language as $key => $lang):?>
            <option value="<?php echo($key);?>"><?php echo($lang);?></option>
        <?php endforeach;?>
        </select>
    </div>
</div>
</fieldset>
<div class="form-group">
    <textarea class="form-control" cols="50" rows="20" name="source"></textarea>
</div>
<div class="form-group">
    <div class="col-sm-offset-4">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn">Cancel</button>
    </div>
</div>
</form>