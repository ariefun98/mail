<title>{{$title}}</title>
<script src="{{asset('assets/summernote/dist')}}/jquery.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<style>
	.card-mail {
		box-shadow:0px 0px 20px #222;
		border-radius: 15px;
		background-color: #303030;
		width: 100%;
		max-width: 500px;
	}
	div {
		display: block;
	}
	.top-tr {
		display: table-row;
		vertical-align: inherit;
		border-color: inherit;
	}
	.top-left_tr {
		margin-left: 16px;
	    font-weight: 500;
	    padding-bottom: 10px;
	    padding-top: 10px;
	    height: auto;
	    line-height: 20px;
	    padding-left: 0;
	    padding-right: 0;
	}
	.top-h2 {
	    font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
	    font-size: .875rem;
	    letter-spacing: .2px;
	    font-weight: 500;
	    margin: 0;
	}
	.top-label {
		overflow: hidden;
	    text-overflow: ellipsis;
	    white-space: nowrap;
	    color : white;
	}
	.main {
		background-color: white;
	}
	.main-body {
		padding: 0 16px;
	}
	.main-table {
		border-spacing: 0 0;
	    table-layout: fixed;
	    width: 100%;
	}
	.main-form-control {
	    display: block;
		margin-top: 0em;
	}
	.main-input-form {
		padding-bottom: 8px;
	    padding-top: 8px;
	    border: none;
	    box-shadow: inset 0 -1px 0 0 rgba(100,121,143,0.122);
	    line-height: 20px;
	    min-height: auto;
	    padding-left: 0;
	    padding-right: 0;
	    color: #777;
	    font-size: .875rem;
	    min-height: 16px;
	    margin: 12px 1px 0 2px;
		width: 100%;
	}
	.main-textarea {
	    border: none;
	    box-shadow: inset 0 -1px 0 0 rgba(100,121,143,0.122);
	    line-height: 20px;
	    color: #777;
	    font-size: .875rem;
	    margin: 12px 1px 0 2px;
		width: 460px;
		max-width: 460px;
		height: 150px;
		max-height: 150px;
	}
	.main-button-kirim {
	  display: inline-block;
	  padding: 6px 12px;
	  margin-bottom: 0;
	  font-size: 14px;
	  font-weight: normal;
	  line-height: 1.42857143;
	  text-align: center;
	  white-space: nowrap;
	  vertical-align: middle;
	  cursor: pointer;
	  background-image: none;
	  border: 1px solid transparent;
	  border-radius: 4px;
	  color: #fff;
	  background-color: #337ab7;
	  border-color: #2e6da4;
	}
	.main-button-icon {
	  display: inline-block;
	  padding: 6px 12px;
	  margin-bottom: 0;
	  font-size: 14px;
	  font-weight: normal;
	  line-height: 1.42857143;
	  text-align: center;
	  white-space: nowrap;
	  vertical-align: middle;
	  cursor: pointer;
	  background-image: none;
	  border: 1px solid transparent;
	  border-radius: 4px;
	  color: #000000;
	  background-color: #ffffff;
	}
	#mail-files {
		display: none;
	}
	.main-attach {
		font-size: 12px;
	}
</style>
<div class="card-mail">
	<div>
		<table cellpadding="0">
			<tbody>
				<tr class="top-tr">
					<td>
						<div class="top-left_tr">
							<h2 class="top-h2">
								<div class="top-label"><strong>Pesan Baru</strong></div>
							</h2>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="main">
		<div class="main-body">
			<table class="main-table">
				<tbody>
					<tr>
						<td>
							<div class="main-form-control">
								<input type="text" name="to" placeholder="Penerima" class="main-input-form">
								<input type="text" name="cc" placeholder="cc   | a@email.com;b@email.com" class="main-input-form">
								<input type="text" name="bcc" placeholder="bcc | a@email.com;b@email.com" class="main-input-form">
								<input type="text" name="subject" placeholder="Subjek" class="main-input-form">
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<table>
				<tbody>
					<tr>
						<td>
							<div class="main-form-control">
								<textarea type="text" name="message" placeholder="Pesan" class="main-textarea"></textarea>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div>&nbsp;</div>
							<div id="myFiles" class="main-attach"></div>
							<div>&nbsp;</div>
							<div class="main-form-control" align="right">
								<button class="main-button-icon" data-file="" onclick="document.getElementById('mail-files').click();">
									<i class="fa fa-file"></i>
								</button>
								<input type="file" name="mail-files" multiple id="mail-files">
								&nbsp;
								<button class="main-button-kirim">
									<b>Kirim</b>
								</button>
							</div>
							<div>&nbsp;</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	
	$(document).ready(function(){
		inputFile = $('#mail-files');
  		filesContainer = $('#myFiles');
  		files = [];
  		count = 0;

  		inputFile.change(function(){
  			newFiles = [];
  			for(index = 0; index < inputFile[0].files.length; index++){
  				file = inputFile[0].files[index];
  				newFiles.push(file);
  				files.push(file);
  			}
  			newFiles.forEach((file, index) => {
  				if(count == 0){
  					fileElement = $(`<label>${file.name}</label>`);
  				}else{
  					fileElement = $(`<label> || ${file.name}</label>`);
  				}
  				count++;
			    fileElement.data('fileData', file);
			    filesContainer.append(fileElement);
			    filesContainer.append();

			    fileElement.click(function(event) {
			        fileElement = $(event.target);
			        indexToRemove = files.indexOf(fileElement.data('fileData'));
			        fileElement.remove();
			        files.splice(indexToRemove, 1);
			    });
  			});
  		});

	});

</script>