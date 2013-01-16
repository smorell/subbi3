<header id="panelheader">
<div class="container">
    <div class="row">
        <div class="span12">
			<div class="navbar navbar-static-top">
				<div class="navbar-inner">
				{{HTML::link('office','Subbis.de',array('class'=>'brand'))}}
					<ul class="nav">
						<li >{{HTML::link('offfice','Home')}}</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Stammdaten<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>{{HTML::link('office/subbi','Subbis')}}</li>
								<li>{{HTML::link('office/company','Firmen')}}</li>
							</ul>
						</li>
					</ul>
					<ul class="nav pull-right">
						<li class="">
							<a href="#">Logout</a>
						</li>
						<li class="divider"></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>{{HTML::link('office','Einstellungen')}}</li>
								<li class="divider"></li>
								<li>{{HTML::link('office/promoter','Werber')}}</li>
								<li>{{HTML::link('office/seller','Akquisiteure')}}</li>
								<li>{{HTML::link('office/location','Büros')}}</li>
								<li>{{HTML::link('office/campaign','Kampagnen')}}</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
        </div>
    </div>
</div>
</header>