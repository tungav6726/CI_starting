<!DOCTYPE>
<html>
	<head>
	<link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.css" ?>" type="text/css">
	 <link rel="stylesheet" href="<?php echo base_url(). "assets" ?> /dist/css/AdminLTE.min.css">
	 <link rel="stylesheet" href="<?php echo base_url(). "assets" ?> /dist/css/AdminLTE.css">
	 <style>
	 	body{
	 		background-color: rgb(209,209,209);
	 	}
	 </style>
	</head>
	<body>
 <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <section class="col-lg-7 connectedSortable ui-sortable">
          <div class="nav-tabs-custom" style="cursor: move;">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right ui-sortable-handle">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="563" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="50.5" y="261" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,261H538" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="202" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,202H538" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="143" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,143H538" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="84.00000000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,84.00000000000003H538" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="25.00000000000003" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,25.00000000000003H538" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="450.8493317132442" y="273.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="239.60996354799514" y="273.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><path fill="#74a5c1" stroke="none" d="M63,219.05493333333334C76.27460510328068,219.56626666666668,102.82381530984205,222.62345,116.09842041312272,221.10026666666667C129.3730255164034,219.57708333333335,155.92223572296476,209.13558251366123,169.19684082624545,206.86946666666668C182.3271567436209,204.6279825136612,208.58778857837183,204.88215,221.71810449574727,203.06986666666666C234.8484204131227,201.25758333333332,261.1090522478736,194.9129178506375,274.23936816524906,192.3712C287.51397326852975,189.80155118397084,314.06318347509114,182.51721666666668,327.3377885783718,182.6244C340.6123936816525,182.73158333333333,367.16160388821385,204.18057122040074,380.43620899149454,193.22866666666667C393.56652490887,182.39580455373405,419.8271567436209,101.94395359116024,432.95747266099636,95.48533333333336C445.9434993924666,89.09768692449359,471.91555285540704,135.13802307692308,484.9015795868773,141.8436C498.176184690158,148.69818974358975,524.7253948967193,147.7554,538,149.726L538,261L63,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#3c8dbc" d="M63,219.05493333333334C76.27460510328068,219.56626666666668,102.82381530984205,222.62345,116.09842041312272,221.10026666666667C129.3730255164034,219.57708333333335,155.92223572296476,209.13558251366123,169.19684082624545,206.86946666666668C182.3271567436209,204.6279825136612,208.58778857837183,204.88215,221.71810449574727,203.06986666666666C234.8484204131227,201.25758333333332,261.1090522478736,194.9129178506375,274.23936816524906,192.3712C287.51397326852975,189.80155118397084,314.06318347509114,182.51721666666668,327.3377885783718,182.6244C340.6123936816525,182.73158333333333,367.16160388821385,204.18057122040074,380.43620899149454,193.22866666666667C393.56652490887,182.39580455373405,419.8271567436209,101.94395359116024,432.95747266099636,95.48533333333336C445.9434993924666,89.09768692449359,471.91555285540704,135.13802307692308,484.9015795868773,141.8436C498.176184690158,148.69818974358975,524.7253948967193,147.7554,538,149.726" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63" cy="219.05493333333334" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="116.09842041312272" cy="221.10026666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="169.19684082624545" cy="206.86946666666668" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="221.71810449574727" cy="203.06986666666666" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="274.23936816524906" cy="192.3712" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="327.3377885783718" cy="182.6244" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="380.43620899149454" cy="193.22866666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="432.95747266099636" cy="95.48533333333336" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="484.9015795868773" cy="141.8436" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="538" cy="149.726" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#eaf2f5" stroke="none" d="M63,240.02746666666667C76.27460510328068,239.8072,102.82381530984205,241.35496666666666,116.09842041312272,239.1464C129.3730255164034,236.93783333333334,155.92223572296476,223.33676429872497,169.19684082624545,222.35893333333334C182.3271567436209,221.39173096539162,208.58778857837183,233.23263333333333,221.71810449574727,231.36626666666666C234.8484204131227,229.4999,261.1090522478736,209.2890577413479,274.23936816524906,207.428C287.51397326852975,205.54649107468123,314.06318347509114,214.43916666666667,327.3377885783718,216.39600000000002C340.6123936816525,218.35283333333334,367.16160388821385,232.37947613843352,380.43620899149454,223.08266666666668C393.56652490887,213.88690947176687,419.8271567436209,148.2268241252302,432.95747266099636,142.42573333333334C445.9434993924666,136.68839079189686,471.91555285540704,170.47037838827842,484.9015795868773,176.92893333333336C498.176184690158,183.53101172161175,524.7253948967193,190.23343333333335,538,194.66826666666668L538,261L63,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#a0d0e0" d="M63,240.02746666666667C76.27460510328068,239.8072,102.82381530984205,241.35496666666666,116.09842041312272,239.1464C129.3730255164034,236.93783333333334,155.92223572296476,223.33676429872497,169.19684082624545,222.35893333333334C182.3271567436209,221.39173096539162,208.58778857837183,233.23263333333333,221.71810449574727,231.36626666666666C234.8484204131227,229.4999,261.1090522478736,209.2890577413479,274.23936816524906,207.428C287.51397326852975,205.54649107468123,314.06318347509114,214.43916666666667,327.3377885783718,216.39600000000002C340.6123936816525,218.35283333333334,367.16160388821385,232.37947613843352,380.43620899149454,223.08266666666668C393.56652490887,213.88690947176687,419.8271567436209,148.2268241252302,432.95747266099636,142.42573333333334C445.9434993924666,136.68839079189686,471.91555285540704,170.47037838827842,484.9015795868773,176.92893333333336C498.176184690158,183.53101172161175,524.7253948967193,190.23343333333335,538,194.66826666666668" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63" cy="240.02746666666667" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="116.09842041312272" cy="239.1464" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="169.19684082624545" cy="222.35893333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="221.71810449574727" cy="231.36626666666666" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="274.23936816524906" cy="207.428" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="327.3377885783718" cy="216.39600000000002" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="380.43620899149454" cy="223.08266666666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="432.95747266099636" cy="142.42573333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="484.9015795868773" cy="176.92893333333336" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="538" cy="194.66826666666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 434.902px; top: 80px; display: none;"><div class="morris-hover-row-label">2013 Q1</div><div class="morris-hover-point" style="color: #a0d0e0">
  Item 1:
  10,687
</div><div class="morris-hover-point" style="color: #3c8dbc">
  Item 2:
  4,460
</div></div></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"><svg height="342" version="1.1" width="512" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#3c8dbc" d="M296.5,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,384.7277551949771,180.44625304313007" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#3c8dbc" stroke="#ffffff" d="M296.5,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,387.56364732624417,181.4248826052307L424.1151459070204,194.03833029452744A135,135,0,0,1,296.5,285Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#f56954" d="M384.7277551949771,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,212.78484627831412,108.73398312817662" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#f56954" stroke="#ffffff" d="M387.56364732624417,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,210.09400205154566,107.40757544301087L170.92726941747117,88.10097469226493A140,140,0,0,1,428.8416327924656,195.6693795646951Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#00a65a" d="M212.78484627831412,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,296.47067846904883,243.333328727518" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#00a65a" stroke="#ffffff" d="M210.09400205154566,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,296.46973599126824,246.3333285794739L296.4575884998742,284.9999933380171A135,135,0,0,1,175.4120097954186,90.31165416754118Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="296.5" y="140" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="15px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: 800; font-stretch: normal; font-size: 15px; line-height: normal; font-family: Arial;" font-weight="800" transform="matrix(1,0,0,1,0,0)"><tspan dy="140" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store Sales</tspan></text><text x="296.5" y="160" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="14px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 14px; line-height: normal; font-family: Arial;" transform="matrix(1,0,0,1,0,0)"><tspan dy="160" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan></text></svg></div>
            </div>
          </div>
        </section>
        <section class="col-lg-5 connectedSortable ui-sortable"> 
         <button type="submit" class="btn btn-info pull-center" onclick="window.location='<?php echo base_url()."login/out";?>'">Logout</button> <hr>
        <button type="submit" class="btn btn-info pull-center" onclick="window.location='<?php echo base_url()."login/showdata";?>'">Show data</button><hr>
        </section>
      </div>
             <section class="col-lg-7 connectedSortable ui-sortable">
 
        </section>

    </section>
    
   
	</body>
</html>