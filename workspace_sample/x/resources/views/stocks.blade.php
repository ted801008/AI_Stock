@extends('layouts.app')
@section('header')
<link rel="stylesheet" href="{{ url('css/stocks.css') }}">
@endsection
@section('content')
<div class="wrapper">
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('adminlte/dist/img/user1-128x128.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!--
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
            <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      -!>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <hr style="    margin-top: 6px; margin-bottom: 6px;">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="background-color: #f9f9f9;color:#888"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp;網站導航</li>
        <hr style="    margin-top: 6px; margin-bottom: 6px;">
        <li><a href={{url('home')}}><i class="fa fa-dashboard"></i> <span>主控台</span></a></li>
        <li style="background-color: #eee"><a href={{url('stocks')}}> <i class="fa fa-indent" aria-hidden="true"></i> <span>股票大廳</span></a></li>
        <li><a href={{url('mystocks')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的投資組合</span></a></li>
         <li><a href={{url('myfollows')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的關注清單</span></a></li>
         <li><a href={{url('mysubscribe')}}> <i class="fa fa-shopping-basket" aria-hidden="true"></i> <span>我的訂閱</span></a></li>
        <!--
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    @if($errors->any())
    <h4 class="label label-warning">{{$errors->first()}}</h4>
    @endif
      <h1 style="font-family: '微軟正黑體';padding-top: 5px;">
      股票大廳 <span class="label label-primary">{{$fiterMessage}}</span>
      <small>本日交易金額 124,5600,812</small>
      <button type="button" id="filter" class="btn btn-info btn-lg pull-right" style="margin-top: -10px;margin-bottom: 10px;" data-toggle="modal" data-target="#filterbox">股票篩選</button>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">            <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>股票代號</th>
                  <th>股票名稱</th>
                  <th>股票價格(s)</th>
                  <th>漲幅</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($stocks as $stock)
                <tr>
                  <td>{{$stock->code}}</td>
                  <td><a href="stock/detail/{{$stock->id}}">{{$stock->name}}</a></td>
                  <td>{{$stock->price}}</td>
                  <?php
                  if ( mb_substr_count($stock->updown, "▽") ) {
                  # code...
                  echo "<td style='color:green'>".$stock->updown."</td>";
                  }
                  else{
                  echo "<td style='color:Red'>".$stock->updown."</td>";
                  }
                  ?>
                  <td style="width:18%">
                    <a type="button" href="stock/buy/{{$stock->id}}"  class="btn btn-danger">立即購買</a>
                    <a type="button" href="stock/follow/{{$stock->id}}" class="btn btn-warning">加入關注</a>
                  </td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  <div class="modal fade" id="filterbox" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">股票篩選</h4>
        </div>
        <div class="modal-body" style="padding: 0px;display: inline-block;width: 100%;">
          <form action="{{url('stocks')}}" method="get" id="hotel-form" style="padding-top: 20px;padding-bottom: 20px;">
            <div class="col-md-12" style="padding: 0px;padding-top: 10px;padding-bottom: 10px;background-color: #f6e8e4">
              <div id="acomodo-buscador">
                <div class="hab-group">
                  <div class="form-group col-md-6">
                    <label for="adt">股價大於</label>
                    <input type="number" class="form-control" name="gt" min="0" value="0">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="chd">股價小於</label>
                    <input type="number" class="form-control" name="lt" min="0"  value="100">
                  </div>
                  <div class="age-chd"></div>
                </div>
              </div>
            </div>
            <div class="col-md-12" style="padding: 0px;padding-top: 10px;padding-bottom: 10px;background-color: #e4f2f6">
              <div class="form-group col-md-6">
                <label for="rooms">企業營運指標</label>
                <select id="sindex" name="sindex"   class="form-control">
                  <option value="gm">營業毛利率</option>
                  <option value="pp">營業利益率</option>
                  <option value="pm">稅前淨利率</option>
                  <option value="roa">資產報酬率</option>
                  <option value="roe">股東權益報酬率</option>
                </select>
                <!--<input type="number" class="form-control" id="rooms" name="hab" min="1" max="10" value="1">-->
              </div>
              <div class="form-group col-md-6">
                <label for="adt">指標大於(%)</label>
                <input type="number" class="form-control" name="igt" min="0" max="99" value="0">
                <!--<input type="number" class="form-control" id="rooms" name="hab" min="1" max="10" value="1">-->
              </div>
            </div>
            
            <div class="form-group col-md-12" style="background-color: #f3f3f3">
              
              <div id="gminfo" class="sindexinfo" style="width:100%;min-height:60px;margin-top: 5px;margin-bottom: 5px;font-size: 16px;padding: 10px;">
                <i class="fa fa-info-circle" style="color:#269abc" aria-hidden="true"></i> &nbsp;營業毛利率是營業毛利額與營業凈收入之間的比率，用於對企業獲利能力的分析。計算公式為：營業毛利率=營業毛利額/主營業務收入X100%。
                通俗的講，營業毛利率是用以反映企業每一元營業收入中含有多少毛利額，它是凈利潤的基礎，沒有足夠大的毛利率便不能形成企業的盈利。
              <br>實際上，衡量企業盈利能力的大小不能單看營業收入，因為營業收入中還包括營業成本。只有扣除了這一成本之後，才能用以補償企業的各項營業支出。<br>主營業務的毛利率越高，則扣除各項支出後的利潤也就更高，企業的獲利能力越強。另外，由於毛利率較高，其產品的定價就較靈活，在國內企業經常使用的營銷手段——價格戰中占據有利位置。</div>
              <div id="ppinfo" class="sindexinfo" style="display:none; width:100%;min-height:60px;margin-top: 5px;margin-bottom: 5px;font-size: 16px;padding: 10px;">
                <i class="fa fa-info-circle" style="color:#269abc" aria-hidden="true"></i> &nbsp;營業利益率為公司每創造1元的營收所能得到的獲利，與毛利率的差別在於毛利率只考慮直接因為生產產品所需要的成本，而營業利益則是考慮了在取得收入的過程中所耗用的一切成本。<br>
                營業利益率為反映一家公司本業獲利能力的指標。由於營業利益的計算已將過程中所耗用的一切成本均列入考量，因此在關注本業的獲利能力時，營業利益率便為重要指標。與毛利率概念相同，當營業利益率發生變化時，通常代表著公司體質發生轉變，例如新產品效益出現、規模經濟量顯現或是管理能力的提升等等，這些公司體質轉佳的效益都會顯現在營業利益率數字中。<br>
              在計算上，營業利益率＝(營業收入－營業成本－營業費用) ÷營業收入 ×100％，比率越高，表示獲利率越高。</div>
              <div id="pminfo" class="sindexinfo" style="display:none;width:100%;min-height:60px;margin-top: 5px;margin-bottom: 5px;font-size: 16px;padding: 10px;">
                <i class="fa fa-info-circle" style="color:#269abc" aria-hidden="true"></i> &nbsp;
                稅前淨利率＝稅後淨利 / 銷貨收入淨額X100%
                淨利率越高，表示公司賺錢能力強。
                營業毛利率賺（賠） 但營業利益率 稅前淨利率卻是賠（賺）
                可能是產品毛利率低（高），營業費用太高（較低），業外收入差（強）。
              </div>
              <div id="roainfo" class="sindexinfo" style="display:none;width:100%;min-height:60px;margin-top: 5px;margin-bottom: 5px;font-size: 16px;padding: 10px;">
                <i class="fa fa-info-circle" style="color:#269abc" aria-hidden="true"></i> &nbsp;
                總資產報酬率又稱總資產利潤率、總資產回報率、資產總額利潤率。是指企業息稅前利潤與平均總資產之間的比率。用以評價企業運用全部資產的總體獲利能力，是評價企業資產運營效益的重要指標。<br>
                總資產報酬率越高，表明資產利用效率越高，說明企業在增加收入、節約資金使用等方面取得了良好的效果；該指標越低，說明企業資產利用效率低，應分析差異原因，提高銷售利潤率，加速資金周轉，提高企業經營管理水平。
              </div>
              <div id="roeinfo" class="sindexinfo" style="display:none;width:100%;min-height:60px;margin-top: 5px;margin-bottom: 5px;font-size: 16px;padding: 10px;">
                <i class="fa fa-info-circle" style="color:#269abc" aria-hidden="true"></i> &nbsp;
                股東權益報酬率，是衡量上市公司盈利能力的重要指標。是指利潤額與平均股東權益的比值，該指標越高，說明投資帶來的收益越高；凈資產收益率越低，說明企業所有者權益的獲利能力越弱。該指標體現了自有資本獲得凈收益的能力。
              </div>
            </div>
            <div class="form-group col-md-12">
              <button type="submit" class="btn btn-info btn-lg btn-block"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section("footer")
<script type="text/javascript">




$(function () {



$('#example1').DataTable({
"paging": true,
"lengthChange": true,
"searching": true,
"ordering": true,
"info": true,
"autoWidth": false,
"iDisplayLength":25
});
// Instance the tour
var tour = new Tour({
steps: [
{
element: "#filter",
title: "股票篩選",
content: "不知道怎麼選股票嗎?點我吧!",
placement: "left",
next: -1,
prev: -1,
}
]});
// Initialize the tour
tour.init();
// Start the tour
tour.start();
});
$('#sindex').on('change', function (e) {
var optionSelected = $("option:selected", this);
var valueSelected = this.value;
var select = "#"+valueSelected+"info";
$('.sindexinfo').each(function(){
$(this).hide();
});
$(select).show();
});
</script>
@endsection