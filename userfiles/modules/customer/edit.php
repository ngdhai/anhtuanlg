<script>
    $(document).ready(function () {
        $("#add-bill_code-form").submit(function (event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('save_bill_code'); ?>";
            var post = $.post(url, data);
            post.done(function (data) {
                mw.reload_module("bill_code");
                mw.reload_module("bill_code/list");
            });
        });
    });
</script>

<form id="add-bill_code-form">
  <h3>Add new code</h3>
  <label class="mw-ui-label">Code</label>
  <input type="text" name="code" class="mw-ui-field">
  <label class="mw-ui-label">Content</label>
  <textarea  name="content" class="mw-ui-field"></textarea>
  <input type="submit" name="submit" value="Save" class="mw-ui-btn"/>
</form>