<script type="text/x-template" id="user-form-template">
	<form class="form-horizontal">
		<div class="panel panel-default">
			<div class="panel-heading">
        <h3 class="panel-title">User Form</h3>
        <ul class="panel-controls">
            <li><a href="#" class="panel-remove"><span class="fa fa-times" v-on:click.stop.prevent="close"></span></a></li>
        </ul>
      </div>
			<div class="panel-body">							
					<div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">User Account</label>
              <div class="col-md-6 col-xs-12">                                            
                  <div>
                      <input type="text" class="form-control" v-model="user.user_name"/>
                  </div>                                            
                  <span class="help-block">This is sample of text field</span>
              </div>
          </div>
          <div class="form-group">                                        
            <label class="col-md-3 col-xs-12 control-label">Email</label>
            <div class="col-md-6 col-xs-12">
                <div>
                    <input type="email" class="form-control" v-model="user.email"/>
                </div>            
                <span class="help-block">Email field sample</span>
            </div>
        	</div>
          <div class="form-group">
              <label class="col-md-3 col-xs-12 control-label">Full Name</label>
              <div class="col-md-6 col-xs-12">                                            
                  <div>
                      <input type="text" class="form-control" v-model="user.full_name"/>
                  </div>                                            
                  <span class="help-block">This is sample of text field</span>
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Role</label>
            <div class="col-md-6 col-xs-12">                                                                                            
                <select class="form-control"  v-model="user.role_id">
                    <option value="1">Adminstrator</option>
                    <option value="2">Accountant</option>
                </select>
                <span class="help-block">Select box example</span>
            </div>
        	</div>						
			</div>
			<div class="panel-footer">
        <button class="btn btn-default">Clear</button>                                    
        <button class="btn btn-primary pull-right" v-on:click.stop.prevent="saveUser">Save</button>
      </div>
		</div>
    {{ method_field('POST') }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}" v-model="token"/>
	</form>
</script>