@extends('admin_layout')
@section('title', 'Trang Chủ') 
@section('duy')
    

<section class="section">
    <div class="section-header">
                  <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                          <div class="section-header-breadcrumb-content">
                              <h1>Dashboard</h1>
                          </div>
                      </div>
                      {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                          <div class="section-header-breadcrumb-chart float-right">
                              <div class="breadcrumb-chart m-l-50">
                                  <div class="float-right">
                                      <div class="icon m-b-10">
                                          <div class="chart header-bar">
                                              <canvas width="49" height="40" ></canvas>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="float-right m-r-5 m-l-10 m-t-1">
                                      <div class="chart-info">
                                          <span>$10,415</span>
                                          <p>Last Week</p>
                                      </div>
                                  </div>
                              </div>
                          
                              <div class="breadcrumb-chart m-l-50">
                                  <div class="float-right">
                                      <div class="icon m-b-10">
                                          <div class="chart header-bar2">
                                              <canvas width="49" height="40" ></canvas>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="float-right m-r-5 m-l-10 m-t-1">
                                      <div class="chart-info">
                                          <span>$22,128</span>
                                          <p>Last Month</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div> --}}
                  </div>
    </div>
    {{-- <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card card-sales-widget card-bg-blue-gradient">
          <div class="card-icon shadow-primary bg-blue">
            <i class="fas fa-user-plus"></i>
          </div>
          <div class="card-wrap pull-right">
            <div class="card-header">
              <h3>1,437</h3>
              <h4>New Clients</h4>
            </div>
          </div>
          <div class="card-chart">
            <div id="chart-1"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card card-sales-widget card-bg-yellow-gradient">
          <div class="card-icon shadow-primary bg-warning">
            <i class="fas fa-drafting-compass"></i>
          </div>
          <div class="card-wrap pull-right">
            <div class="card-header">
              <h3>2,021</h3>
              <h4>Delivered Orders</h4>
            </div>
          </div>
          <div class="card-chart">
            <div id="chart-2"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card card-sales-widget card-bg-orange-gradient">
          <div class="card-icon shadow-primary bg-hibiscus">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <div class="card-wrap pull-right">
            <div class="card-header">
              <h3>5,124</h3>
              <h4>Total Sales</h4>
            </div>
          </div>
          <div class="card-chart">
            <div id="chart-3"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card card-sales-widget card-bg-green-gradient">
          <div class="card-icon shadow-primary bg-green">
            <i class="fas fa-dollar-sign"></i>
          </div>
          <div class="card-wrap pull-right">
            <div class="card-header">
              <h3>$50,789</h3>
              <h4>Total Earning</h4>
            </div>
          </div>
          <div class="card-chart">
            <div id="chart-4"></div>
          </div>
        </div>
      </div>
    </div> --}}
    {{-- <div class="row">
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Monthly Sales</h4>
          </div>
          <div class="card-body">
               <div id="monthlySalesChart"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Yearly Sales</h4>
          </div>
          <div class="card-body">
            <div id="yearlySalesChart"></div>
          </div>
        </div>
      </div>
     </div>
     <div class="row">
      
      <div class="col-lg-4 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Sales by Social Sources</h4>
          </div>
          <div class="card-body mb-3">
            <div id="salesBySocialSourceChart"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Invoice details</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th>Order ID</th>
                  <th>Billing Name</th>
                  <th>Total</th>
                  <th>Payment Method</th>
                  <th>Payment Status</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>#TD1230</td>
                  <td>David Brown</td>
                  <td>150$</td>
                  <td><img alt="image" class="mr-3" width="40" src="assets/img/cards/paypal.png"></td>
                  <td>
                      <div class="badge badge-success badge-shadow">Paid</div>
                  </td>
                  <td>
                    <div class="media-cta-square">
                      <a href="#" class="btn btn-outline-primary">Detail</a>
                    </div>
                  
                  </td>
                </tr>
                <tr>
                  <td>#TD1231</td>
                  <td>Luna Moore</td>
                  <td>250$</td>
                  <td><img alt="image" class="mr-3" width="40" src="assets/img/cards/visa.png"></td>
                  <td>
                      <div class="badge badge-info badge-shadow">Refund</div>
                  </td>
                  <td>
                    <div class="media-cta-square">
                      <a href="#" class="btn btn-outline-primary">Detail</a>
                    </div>
                  
                  </td>
                </tr>
                 <tr>
                  <td>#TD1232</td>
                  <td>Emma Martin</td>
                  <td>350$</td>
                  <td><img alt="image" class="mr-3" width="40" src="assets/img/cards/americanexpress.png"></td>
                  <td>
                      <div class="badge badge-success badge-shadow">Paid</div>
                  </td>
                  <td>
                    <div class="media-cta-square">
                      <a href="#" class="btn btn-outline-primary">Detail</a>
                    </div>
                  
                  </td>
                </tr>
                 <tr>
                  <td>#TD1233</td>
                  <td>Noah Clark</td>
                  <td>435$</td>
                  <td><img alt="image" class="mr-3" width="40" src="assets/img/cards/mastercard.png"></td>
                  <td>
                      <div class="badge badge-danger badge-shadow">Chargeback</div>
                  </td>
                  <td>
                    <div class="media-cta-square">
                      <a href="#" class="btn btn-outline-primary">Detail</a>
                    </div>
                  
                  </td>
                </tr>
                <tr>
                  <td>#TD1234</td>
                  <td>William Thomas</td>
                  <td>220$</td>
                  <td><img alt="image" class="mr-3" width="40" src="assets/img/cards/discover.png"></td>
                  <td>
                      <div class="badge badge-info badge-shadow">Refund</div>
                  </td>
                  <td>
                    <div class="media-cta-square">
                      <a href="#" class="btn btn-outline-primary">Detail</a>
                    </div>
                  
                  </td>
                </tr>
                <tr>
                  <td>#TD1230</td>
                  <td>Olivia Lewis</td>
                  <td>310$</td>
                  <td><img alt="image" class="mr-3" width="40" src="assets/img/cards/jcb.png"></td>
                  <td>
                      <div class="badge badge-success badge-shadow">Paid</div>
                  </td>
                  <td>
                    <div class="media-cta-square">
                      <a href="#" class="btn btn-outline-primary">Detail</a>
                    </div>
                  
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
     --}}
    
    {{-- <div class="row">
      <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
            <div class="card-header">
              <h4>User Activity</h4>
            </div>
            <div class="card-body">
              <div class="activities">
                <div class="activity">
                  <div class="activity-icon text-white">
                    <img alt="image" class="mr-3 timeline-img-border rounded-circle" width="50" src="assets/img/users/user-1.png">
                  </div>
                  <div class="activity-detail">
                    <div class="mb-2">
                      <span class="text-job">2 hour ago</span>
                      <span class="bullet"></span>
                      <a class="text-job" href="#">View</a>
                      <div class="float-right dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                        <div class="dropdown-menu">
                          <div class="dropdown-title">Options</div>
                          <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                          <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item has-icon text-danger"
                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                        </div>
                      </div>
                    </div>
                    <p>Created the task "<a href="#">SR-101</a>". Please let me know if you have any question.</p>
                  </div>
                </div>
                <div class="activity">
                  <div class="activity-icon text-white">
                    <img alt="image" class="mr-3 timeline-img-border rounded-circle" width="50" src="assets/img/users/user-2.png">
                  </div>
                  <div class="activity-detail">
                    <div class="mb-2">
                      <span class="text-job">3 hour ago</span>
                      <span class="bullet"></span>
                      <a class="text-job" href="#">View</a>
                      <div class="float-right dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                        <div class="dropdown-menu">
                          <div class="dropdown-title">Options</div>
                          <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                          <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item has-icon text-danger"
                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                        </div>
                      </div>
                    </div>
                    <p>Login to the system with abc@email.com email From US.</p>
                  </div>
                </div>
                <div class="activity">
                  <div class="activity-icon text-white">
                    <img alt="image" class="mr-3 timeline-img-border rounded-circle" width="50" src="assets/img/users/user-3.png">
                  </div>
                  <div class="activity-detail">
                    <div class="mb-2">
                      <span class="text-job">12 HOUR AGO</span>
                      <span class="bullet"></span>
                      <a class="text-job" href="#">View</a>
                      <div class="float-right dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                        <div class="dropdown-menu">
                          <div class="dropdown-title">Options</div>
                          <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                          <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item has-icon text-danger"
                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                        </div>
                      </div>
                    </div>
                    <p>closed this task. Because it was already done.</p>
                  </div>
                </div>
                <div class="activity">
                  <div class="activity-icon text-white">
                    <img alt="image" class="mr-3 timeline-img-border rounded-circle" width="50" src="assets/img/users/user-5.png">
                  </div>
                  <div class="activity-detail">
                    <div class="mb-2">
                      <span class="text-job">6 hour ago</span>
                      <span class="bullet"></span>
                      <a class="text-job" href="#">View</a>
                      <div class="float-right dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                        <div class="dropdown-menu">
                          <div class="dropdown-title">Options</div>
                          <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                          <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item has-icon text-danger"
                            data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                            data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                        </div>
                      </div>
                    </div>
                    <p>Log out of the system.</p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
      </div>
      <div class="col-lg-7 col-md-12 col-sm-12">
       <div class="card">
          <div class="card-header">
            <h4>Recent Client Feedback</h4>
          </div>
          <div class="card-body mb-2 mt-2">
            <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder mt-2">
              <li class="media">
                <img alt="image" class="mr-3 image-square" width="50" src="assets/img/users/user-8.png">
                <div class="media-body">
                  <div class="media-title">Robert Nelson</div>
                  <div class="col-blue">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half" aria-hidden="true"></i>
                  </div>
                  <div class="text-muted">Lorem ipsum dolor sit amet consec tetur adip ascing elit users.Lorem ipsum dolor sit amet consec tetur adip ascing elit users.Lorem ipsum dolor sit amet consec tetur adip ascing elit users.Lorem ipsum dolor sit amet consec tetur adip ascing elit users...</div>
                  <div class="media-like">
                    <a href="#" class="col-teal"><i class="fas fa-thumbs-up"></i></a>
                    <a href="#" class="col-pink"><i class="fas fa-thumbs-down"></i></a>
                  </div>
                </div>
                <div class="media-cta">
                  <div class="text-job text-muted mt-1">10-12-2019 11:50 PM</div>
                </div>
              </li>
              <li class="media">
                <img alt="image" class="mr-3 image-square" width="50" src="assets/img/users/user-9.png">
                <div class="media-body">
                  <div class="media-title">Olivia Porter</div>
                  <div class="col-blue">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half" aria-hidden="true"></i>
                  </div>
                  <div class="text-muted">Lorem ipsum dolor sit amet consec tetur adip ascing elit users.Lorem ipsum dolor sit amet consec tetur adip ascing elit users.Lorem ipsum dolor sit amet consec tetur adip ascing elit users.Lorem ipsum dolor sit amet consec tetur adip ascing elit users...</div>
                  <div class="media-like">
                    <a href="#" class="col-teal"><i class="fas fa-thumbs-up"></i></a>
                    <a href="#" class="col-pink"><i class="fas fa-thumbs-down"></i></a>
                  </div>
                </div>
                <div class="media-cta">
                  <div class="text-job text-muted mt-1">03-01-2020 10:50 PM</div>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div> --}}
    
  </section>
  @endsection