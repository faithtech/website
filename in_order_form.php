<!-- modal-booking -->
<div class="modal fade" id="modal-booking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      		</div>
	      	<div class="modal-body">
	      		<p>此功能尚未開啟，以下為示範表單</p>
	        	<p class="trn">Hello, please help us fill in the form and we'll contact you as soon as possible, thank you!</p>
	        	<form id="form-booking" action="http://52.86.192.26/CheckinPlusAPI/booking/create">
	        		<div class="form-group">
						<label>* <span class="trn">Full name</span></label>
						<input type="text" class="form-control required" id="booking-name" required>
						</div>
						<div class="form-group">
						<label>* <span class="trn">Phone</span></label>
						<input type="tel" class="form-control required" id="booking-phone" required>
						</div>
						<div class="form-group">
						<label>* <span class="trn">Email</span></label>
						<input type="email" class="form-control required" id="booking-email" required>
						</div>
						<div class="form-group">
						<label class="trn">Event name</label>
						<input type="text" class="form-control" id="booking-event-name">
						</div>
						<div class="form-group">
						<label class="trn">Event time</label>
						<div class="clearfix">
							<span class="pull-left select-words trn">From</span>
							<select class="form-control pull-left" style="width: 80px;" id="booking-from-year">
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
							</select>
							<span class="pull-left select-words hidden-phone trn">Y</span>
							<select class="form-control pull-left" style="width: 64px;" id="booking-from-month">
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
							<span class="pull-left select-words hidden-phone trn">M</span>
							<select class="form-control pull-left" style="width: 64px;" id="booking-from-day">
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
								<option>31</option>
							</select>
							<span class="pull-left select-words hidden-phone trn">D</span>
						</div>
						<div class="clearfix">
							<span class="pull-left select-words trn">To</span>
							<select class="form-control pull-left" style="width: 80px;" id="booking-to-year">
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
							</select>
							<span class="pull-left select-words hidden-phone trn">Y</span>
							<select class="form-control pull-left" style="width: 64px;" id="booking-to-month">
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
							<span class="pull-left select-words hidden-phone trn">M</span>
							<select class="form-control pull-left" style="width: 64px;" id="booking-to-day">
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
								<option>31</option>
							</select>
							<span class="pull-left select-words hidden-phone trn">D</span>
						</div>
						</div>
						<div class="form-group">
						<label class="trn">Event address</label>
						<input type="text" class="form-control" id="booking-event-add">
						</div>
						<div class="form-group">
						<label class="trn">Estimated number of activities</label>
						<input type="number" class="form-control" id="booking-event-members">
						</div>
						<div class="form-group">
						<label class="trn">other</label>
						<textarea class="form-control" style="height: 120px;" id="booking-other"></textarea>
						</div>
						<div class="space-4 text-center" style="margin-bottom: 30rem;"><button type="submit" class="btn btn-primary btn-xl trn">Send Order</button></div>
	        	</form>
	      	</div>
    	</div>
  	</div>
</div>

<!-- modal-success -->
<div class="modal fade" id="modal-success" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-sm" role="document">
    	<div class="modal-content">
	      	<div class="modal-body">
	      		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      		<h3 class="trn">Form has been sent</h3>
	      		<p class="trn">Thank you for your patience to fill, and we'll contact you as soon as possible! Thank you!</p>
	      		<div class="text-center"><button type="button" class="btn btn-primary btn-xl trn" data-dismiss="modal">OK</button></div>
	      	</div>
	    </div>
	</div>
</div>

<!-- modal-error -->
<div class="modal fade" id="modal-error" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-sm" role="document">
    	<div class="modal-content">
	      	<div class="modal-body">
	      		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      		<h3 class="text-center space-2 space-top-2 trn">Woops!</h3>
	      		<p class="text-center space-2 trn">Sorry,something has gone wrong, you may want to send a letter to service@faithtech.com.tw We will contact you as soon as possible! Thank you!</p>
	      		<div class="text-center"><button type="button" class="btn btn-primary btn-xl trn" data-dismiss="modal">OK</button></div>
	      	</div>
	    </div>
	</div>
</div>