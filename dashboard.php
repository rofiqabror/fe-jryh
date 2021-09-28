<?php
$css = '<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">';

include 'header.php';
include 'sidebar.php';

?>

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-warning">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="mr-3">
                                <i class="la la-user"></i>
                            </span>
                            <div class="media-body text-white">
                                <p class="mb-1">Donatur</p>
                                <h3 class="text-white">245</h3>
                                <div class="progress mb-2 bg-primary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                                </div>
                                <small>50% dari target</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-secondary">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="mr-3">
                                <i class="la la-graduation-cap"></i>
                            </span>
                            <div class="media-body text-white">
                                <p class="mb-1">Donasi</p>
                                <h3 class="text-white">28</h3>
                                <div class="progress mb-2 bg-primary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                                </div>
                                <small>76% Increase in 20 Days</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-primary">
                    <div class="card-body  p-4">
                        <div class="media">
                            <span class="mr-3">
                                <i class="la la-users"></i>
                            </span>
                            <div class="media-body text-white">
                                <p class="mb-1">Total Donasi</p>
                                <h3 class="text-white">3280</h3>
                                <div class="progress mb-2 bg-secondary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                </div>
                                <small>80% Increase in 20 Days</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Payments Queue</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive recentOrderTable">
                            <table class="table verticle-middle table-responsive-md">
                                <thead>
                                    <tr>
                                        <th scope="col">Ward No.</th>
                                        <th scope="col">Patient</th>
                                        <th scope="col">Dr Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Bills</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12</td>
                                        <td>Mr. Bobby</td>
                                        <td>Dr. Jackson</td>
                                        <td>01 August 2020</td>
                                        <td><span class="badge badge-rounded badge-primary">Checkin</span></td>
                                        <td>$120</td>
                                        <td>
                                            <div class="dropdown custom-dropdown mb-0">
                                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                        height="18px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                    <a class="dropdown-item text-danger"
                                                        href="javascript:void(0);">Cancel</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10 </td>
                                        <td>Mr. Dexter</td>
                                        <td>Dr. Charles</td>
                                        <td>31 July 2020</td>
                                        <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                        <td>$540</td>
                                        <td>
                                            <div class="dropdown custom-dropdown mb-0">
                                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                        height="18px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                    <a class="dropdown-item text-danger"
                                                        href="javascript:void(0);">Cancel</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 </td>
                                        <td>Mr. Nathan</td>
                                        <td>Dr. Frederick</td>
                                        <td>30 July 2020</td>
                                        <td><span class="badge badge-rounded badge-danger">Canceled</span></td>
                                        <td>$301</td>
                                        <td>
                                            <div class="dropdown custom-dropdown mb-0">
                                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                        height="18px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                    <a class="dropdown-item text-danger"
                                                        href="javascript:void(0);">Cancel</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Mr. Aurora</td>
                                        <td>Dr. Roman</td>
                                        <td>29 July 2020</td>
                                        <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                        <td>$099</td>
                                        <td>
                                            <div class="dropdown custom-dropdown mb-0">
                                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                        height="18px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                    <a class="dropdown-item text-danger"
                                                        href="javascript:void(0);">Cancel</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>Mr. Matthew</td>
                                        <td>Dr. Samantha</td>
                                        <td>28 July 2020</td>
                                        <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                        <td>$520</td>
                                        <td>
                                            <div class="dropdown custom-dropdown mb-0">
                                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                        height="18px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                    <a class="dropdown-item text-danger"
                                                        href="javascript:void(0);">Cancel</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>Donatur</th>
                                        <th>Donasi Program</th>
                                        <th>Nominal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>$114,500</td>
                                    </tr>
                                    <tr>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>$235,500</td>
                                    </tr>
                                    <tr>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr>
                                        <td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>$139,575</td>
                                    </tr>
                                    <tr>
                                        <td>Thor Walton</td>
                                        <td>Developer</td>
                                        <td>$98,540</td>
                                    </tr>
                                    <tr>
                                        <td>Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>$87,500</td>
                                    </tr>
                                    <tr>
                                        <td>Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr>
                                        <td>Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>$115,000</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>$75,650</td>
                                    </tr>
                                    <tr>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>$112,000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header d-sm-flex d-block pb-0 border-0">
                        <div class="d-flex align-items-center">
                            <span class="p-3 mr-3 rounded bg-warning">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip1)">
                                        <path
                                            d="M0.988957 17.0741C0.328275 17.2007 -0.104585 17.8386 0.0219823 18.4993C0.133362 19.0815 0.644694 19.4865 1.21678 19.4865C1.29272 19.4865 1.37119 19.4789 1.44713 19.4637L6.4592 18.5018C6.74524 18.4461 7.00091 18.2917 7.18316 18.0639L9.33481 15.3503L8.61593 14.9832C8.08435 14.7149 7.71475 14.2289 7.58818 13.6391L5.55804 16.1983L0.988957 17.0741Z"
                                            fill="white"></path>
                                        <path
                                            d="M18.84 6.49306C20.3135 6.49306 21.508 5.29854 21.508 3.82502C21.508 2.3515 20.3135 1.15698 18.84 1.15698C17.3665 1.15698 16.1719 2.3515 16.1719 3.82502C16.1719 5.29854 17.3665 6.49306 18.84 6.49306Z"
                                            fill="white"></path>
                                        <path
                                            d="M13.0179 3.15677C12.7369 2.86819 12.4762 2.75428 12.1902 2.75428C12.0864 2.75428 11.9826 2.76947 11.8712 2.79479L7.29203 3.88073C6.6592 4.03008 6.26937 4.66545 6.41872 5.29576C6.54782 5.83746 7.02877 6.20198 7.56289 6.20198C7.65404 6.20198 7.74514 6.19185 7.8363 6.16907L11.7371 5.24513C11.9902 5.52611 13.2584 6.90063 13.4888 7.14364C11.8763 8.87002 10.2639 10.5939 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4038C8.10966 13.0037 8.25397 13.9454 8.96275 14.3023L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3064 11.7371 22.6608C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2659L16.6732 16.983C16.8529 16.6919 16.901 16.34 16.8074 16.0135C16.7137 15.6844 16.4884 15.411 16.1821 15.2566L12.8331 13.553L16.3543 9.78636L19.0122 12.0393C19.2324 12.2266 19.5032 12.3177 19.7716 12.3177C20.0601 12.3177 20.3487 12.2114 20.574 12.0038L23.6243 9.16112C24.1002 8.71814 24.128 7.97392 23.685 7.49803C23.4521 7.24996 23.1383 7.12339 22.8244 7.12339C22.5383 7.12339 22.2497 7.22717 22.0245 7.43727L19.7412 9.56107C19.7386 9.56361 14.0178 4.18196 13.0179 3.15677Z"
                                            fill="white"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip1">
                                            <rect width="24" height="24" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <div class="mr-auto pr-3">
                                <h4 class="text-black fs-20">Donasi</h4>
                                <p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </div>
                        <div class="dropdown mt-sm-0 mt-3">
                            <button type="button" class="btn rounded border border-light dropdown-toggle"
                                data-toggle="dropdown" aria-expanded="false">
                                Monthly
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0" style="position: relative;">
                        <div id="chartBar" style="min-height: 365px;">
                            <div id="apexchartsn2gipk0j"
                                class="apexcharts-canvas apexchartsn2gipk0j apexcharts-theme-light"
                                style="width: 487px; height: 350px;"><svg id="SvgjsSvg1274" width="487" height="350"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1276" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(50.359375, 30)">
                                        <defs id="SvgjsDefs1275">
                                            <clipPath id="gridRectMaskn2gipk0j">
                                                <rect id="SvgjsRect1282" width="420.6875" height="284.1738125" x="-4"
                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskn2gipk0j">
                                                <rect id="SvgjsRect1283" width="440.6875" height="308.1738125" x="-14"
                                                    y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <line id="SvgjsLine1281" x1="-0.5" y1="0" x2="-0.5" y2="280.1738125"
                                            stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs"
                                            x="-0.5" y="0" width="1" height="280.1738125" fill="#b1b9c4" filter="none"
                                            fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG1313" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1314" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1316"
                                                    font-family="Poppins" x="0" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1317">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText1319" font-family="Poppins"
                                                    x="37.51704545454545" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1320">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText1322" font-family="Poppins"
                                                    x="75.0340909090909" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1323">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText1325" font-family="Poppins"
                                                    x="112.55113636363635" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1326">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText1328" font-family="Poppins"
                                                    x="150.06818181818178" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1329">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText1331" font-family="Poppins"
                                                    x="187.58522727272722" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1332">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText1334" font-family="Poppins"
                                                    x="225.10227272727266" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1335">Jul</tspan>
                                                    <title>Jul</title>
                                                </text><text id="SvgjsText1337" font-family="Poppins"
                                                    x="262.6193181818181" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1338">Aug</tspan>
                                                    <title>Aug</title>
                                                </text><text id="SvgjsText1340" font-family="Poppins"
                                                    x="300.1363636363635" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1341">Sep</tspan>
                                                    <title>Sep</title>
                                                </text><text id="SvgjsText1343" font-family="Poppins"
                                                    x="337.65340909090895" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1344">Oct</tspan>
                                                    <title>Oct</title>
                                                </text><text id="SvgjsText1346" font-family="Poppins"
                                                    x="375.1704545454544" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1347">Nov</tspan>
                                                    <title>Nov</title>
                                                </text><text id="SvgjsText1349" font-family="Poppins"
                                                    x="412.68749999999983" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1350">Dec</tspan>
                                                    <title>Dec</title>
                                                </text></g>
                                            <line id="SvgjsLine1351" x1="0" y1="281.1738125" x2="412.6875"
                                                y2="281.1738125" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1">
                                            </line>
                                        </g>
                                        <g id="SvgjsG1368" class="apexcharts-grid">
                                            <g id="SvgjsG1369" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1395" x1="0" y1="0" x2="412.6875" y2="0"
                                                    stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1396" x1="0" y1="46.69563541666667" x2="412.6875"
                                                    y2="46.69563541666667" stroke="#f1f1f1" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1397" x1="0" y1="93.39127083333334" x2="412.6875"
                                                    y2="93.39127083333334" stroke="#f1f1f1" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1398" x1="0" y1="140.08690625" x2="412.6875"
                                                    y2="140.08690625" stroke="#f1f1f1" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1399" x1="0" y1="186.78254166666667" x2="412.6875"
                                                    y2="186.78254166666667" stroke="#f1f1f1" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1400" x1="0" y1="233.47817708333335" x2="412.6875"
                                                    y2="233.47817708333335" stroke="#f1f1f1" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1401" x1="0" y1="280.1738125" x2="412.6875"
                                                    y2="280.1738125" stroke="#f1f1f1" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1370" class="apexcharts-gridlines-vertical">
                                                <line id="SvgjsLine1371" x1="0" y1="0" x2="0" y2="280.1738125"
                                                    stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1373" x1="37.51704545454545" y1="0"
                                                    x2="37.51704545454545" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1375" x1="75.0340909090909" y1="0"
                                                    x2="75.0340909090909" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1377" x1="112.55113636363636" y1="0"
                                                    x2="112.55113636363636" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1379" x1="150.0681818181818" y1="0"
                                                    x2="150.0681818181818" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1381" x1="187.58522727272725" y1="0"
                                                    x2="187.58522727272725" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1383" x1="225.1022727272727" y1="0"
                                                    x2="225.1022727272727" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1385" x1="262.61931818181813" y1="0"
                                                    x2="262.61931818181813" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1387" x1="300.13636363636357" y1="0"
                                                    x2="300.13636363636357" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1389" x1="337.653409090909" y1="0"
                                                    x2="337.653409090909" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1391" x1="375.17045454545445" y1="0"
                                                    x2="375.17045454545445" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1393" x1="412.6874999999999" y1="0"
                                                    x2="412.6874999999999" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            </g>
                                            <line id="SvgjsLine1372" x1="0" y1="281.1738125" x2="0" y2="287.1738125"
                                                stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1374" x1="37.51704545454545" y1="281.1738125"
                                                x2="37.51704545454545" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1376" x1="75.0340909090909" y1="281.1738125"
                                                x2="75.0340909090909" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1378" x1="112.55113636363636" y1="281.1738125"
                                                x2="112.55113636363636" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1380" x1="150.0681818181818" y1="281.1738125"
                                                x2="150.0681818181818" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1382" x1="187.58522727272725" y1="281.1738125"
                                                x2="187.58522727272725" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1384" x1="225.1022727272727" y1="281.1738125"
                                                x2="225.1022727272727" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1386" x1="262.61931818181813" y1="281.1738125"
                                                x2="262.61931818181813" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1388" x1="300.13636363636357" y1="281.1738125"
                                                x2="300.13636363636357" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1390" x1="337.653409090909" y1="281.1738125"
                                                x2="337.653409090909" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1392" x1="375.17045454545445" y1="281.1738125"
                                                x2="375.17045454545445" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1394" x1="412.6874999999999" y1="281.1738125"
                                                x2="412.6874999999999" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1403" x1="0" y1="280.1738125" x2="412.6875"
                                                y2="280.1738125" stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1402" x1="0" y1="1" x2="0" y2="280.1738125"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1284" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1285" class="apexcharts-series" seriesName="Running"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1311"
                                                    d="M 0 280.1738125L 0 233.47817708333332L 37.51704545454545 186.78254166666665L 75.0340909090909 233.47817708333332L 112.55113636363637 93.39127083333332L 150.0681818181818 186.78254166666665L 187.58522727272728 186.78254166666665L 225.10227272727275 233.47817708333332L 262.6193181818182 140.08690625L 300.1363636363636 140.08690625L 337.6534090909091 233.47817708333332L 375.17045454545456 23.34781770833331L 412.6875 140.08690625L 412.6875 280.1738125M 412.6875 140.08690625z"
                                                    fill="rgba(255,148,50,0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskn2gipk0j)"
                                                    pathTo="M 0 280.1738125L 0 233.47817708333332L 37.51704545454545 186.78254166666665L 75.0340909090909 233.47817708333332L 112.55113636363637 93.39127083333332L 150.0681818181818 186.78254166666665L 187.58522727272728 186.78254166666665L 225.10227272727275 233.47817708333332L 262.6193181818182 140.08690625L 300.1363636363636 140.08690625L 337.6534090909091 233.47817708333332L 375.17045454545456 23.34781770833331L 412.6875 140.08690625L 412.6875 280.1738125M 412.6875 140.08690625z"
                                                    pathFrom="M -1 280.1738125L -1 280.1738125L 37.51704545454545 280.1738125L 75.0340909090909 280.1738125L 112.55113636363637 280.1738125L 150.0681818181818 280.1738125L 187.58522727272728 280.1738125L 225.10227272727275 280.1738125L 262.6193181818182 280.1738125L 300.1363636363636 280.1738125L 337.6534090909091 280.1738125L 375.17045454545456 280.1738125L 412.6875 280.1738125">
                                                </path>
                                                <path id="SvgjsPath1312"
                                                    d="M 0 233.47817708333332L 37.51704545454545 186.78254166666665L 75.0340909090909 233.47817708333332L 112.55113636363637 93.39127083333332L 150.0681818181818 186.78254166666665L 187.58522727272728 186.78254166666665L 225.10227272727275 233.47817708333332L 262.6193181818182 140.08690625L 300.1363636363636 140.08690625L 337.6534090909091 233.47817708333332L 375.17045454545456 23.34781770833331L 412.6875 140.08690625"
                                                    fill="none" fill-opacity="1" stroke="#ff9432" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="4" stroke-dasharray="0"
                                                    class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskn2gipk0j)"
                                                    pathTo="M 0 233.47817708333332L 37.51704545454545 186.78254166666665L 75.0340909090909 233.47817708333332L 112.55113636363637 93.39127083333332L 150.0681818181818 186.78254166666665L 187.58522727272728 186.78254166666665L 225.10227272727275 233.47817708333332L 262.6193181818182 140.08690625L 300.1363636363636 140.08690625L 337.6534090909091 233.47817708333332L 375.17045454545456 23.34781770833331L 412.6875 140.08690625"
                                                    pathFrom="M -1 280.1738125L -1 280.1738125L 37.51704545454545 280.1738125L 75.0340909090909 280.1738125L 112.55113636363637 280.1738125L 150.0681818181818 280.1738125L 187.58522727272728 280.1738125L 225.10227272727275 280.1738125L 262.6193181818182 280.1738125L 300.1363636363636 280.1738125L 337.6534090909091 280.1738125L 375.17045454545456 280.1738125L 412.6875 280.1738125">
                                                </path>
                                                <g id="SvgjsG1286" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0">
                                                    <g id="SvgjsG1288" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskn2gipk0j)">
                                                        <circle id="SvgjsCircle1289" r="6" cx="0"
                                                            cy="233.47817708333332"
                                                            class="apexcharts-marker no-pointer-events wuur7bfk3"
                                                            stroke="#ff9432" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="0" j="0"
                                                            index="0" default-marker-size="6"></circle>
                                                        <circle id="SvgjsCircle1290" r="6" cx="37.51704545454545"
                                                            cy="186.78254166666665"
                                                            class="apexcharts-marker no-pointer-events w8tr5k4ov"
                                                            stroke="#ff9432" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="1" j="1"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1291" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskn2gipk0j)">
                                                        <circle id="SvgjsCircle1292" r="6" cx="75.0340909090909"
                                                            cy="233.47817708333332"
                                                            class="apexcharts-marker no-pointer-events wtgl6ikdfg"
                                                            stroke="#ff9432" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="2" j="2"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1293" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskn2gipk0j)">
                                                        <circle id="SvgjsCircle1294" r="6" cx="112.55113636363637"
                                                            cy="93.39127083333332"
                                                            class="apexcharts-marker no-pointer-events wftfj3ciu"
                                                            stroke="#ff9432" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="3" j="3"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1295" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskn2gipk0j)">
                                                        <circle id="SvgjsCircle1296" r="6" cx="150.0681818181818"
                                                            cy="186.78254166666665"
                                                            class="apexcharts-marker no-pointer-events whkp55lu2"
                                                            stroke="#ff9432" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="4" j="4"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1297" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskn2gipk0j)">
                                                        <circle id="SvgjsCircle1298" r="6" cx="187.58522727272728"
                                                            cy="186.78254166666665"
                                                            class="apexcharts-marker no-pointer-events wfaafpm3h"
                                                            stroke="#ff9432" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="5" j="5"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1299" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskn2gipk0j)">
                                                        <circle id="SvgjsCircle1300" r="6" cx="225.10227272727275"
                                                            cy="233.47817708333332"
                                                            class="apexcharts-marker no-pointer-events wxlkmmxm4k"
                                                            stroke="#ff9432" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="6" j="6"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1301" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskn2gipk0j)">
                                                        <circle id="SvgjsCircle1302" r="6" cx="262.6193181818182"
                                                            cy="140.08690625"
                                                            class="apexcharts-marker no-pointer-events wnak48fcs"
                                                            stroke="#ff9432" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="7" j="7"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1303" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskn2gipk0j)">
                                                        <circle id="SvgjsCircle1304" r="6" cx="300.1363636363636"
                                                            cy="140.08690625"
                                                            class="apexcharts-marker no-pointer-events wfj09gmt7"
                                                            stroke="#ff9432" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="8" j="8"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1305" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskn2gipk0j)">
                                                        <circle id="SvgjsCircle1306" r="6" cx="337.6534090909091"
                                                            cy="233.47817708333332"
                                                            class="apexcharts-marker no-pointer-events w9na3e9n4i"
                                                            stroke="#ff9432" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="9" j="9"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1307" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskn2gipk0j)">
                                                        <circle id="SvgjsCircle1308" r="6" cx="375.17045454545456"
                                                            cy="23.34781770833331"
                                                            class="apexcharts-marker no-pointer-events wob2vui3v"
                                                            stroke="#ff9432" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="10" j="10"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1309" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaskn2gipk0j)">
                                                        <circle id="SvgjsCircle1310" r="6" cx="412.6875"
                                                            cy="140.08690625"
                                                            class="apexcharts-marker no-pointer-events wvdvc4bre"
                                                            stroke="#ff9432" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="11" j="11"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1287" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine1404" x1="0" y1="0" x2="412.6875" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1405" x1="0" y1="0" x2="412.6875" y2="0" stroke-dasharray="0"
                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1406" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1407" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1408" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect1280" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1352" class="apexcharts-yaxis" rel="0"
                                        transform="translate(4.359375, 0)">
                                        <g id="SvgjsG1353" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1354"
                                                font-family="Poppins" x="20" y="31.6" text-anchor="end"
                                                dominant-baseline="auto" font-size="14px" font-weight="100"
                                                fill="#3e4954" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan1355">120</tspan>
                                            </text><text id="SvgjsText1356" font-family="Poppins" x="20"
                                                y="78.29563541666667" text-anchor="end" dominant-baseline="auto"
                                                font-size="14px" font-weight="100" fill="#3e4954"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan1357">100</tspan>
                                            </text><text id="SvgjsText1358" font-family="Poppins" x="20"
                                                y="124.99127083333335" text-anchor="end" dominant-baseline="auto"
                                                font-size="14px" font-weight="100" fill="#3e4954"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan1359">80</tspan>
                                            </text><text id="SvgjsText1360" font-family="Poppins" x="20"
                                                y="171.68690625000002" text-anchor="end" dominant-baseline="auto"
                                                font-size="14px" font-weight="100" fill="#3e4954"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan1361">60</tspan>
                                            </text><text id="SvgjsText1362" font-family="Poppins" x="20"
                                                y="218.3825416666667" text-anchor="end" dominant-baseline="auto"
                                                font-size="14px" font-weight="100" fill="#3e4954"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan1363">40</tspan>
                                            </text><text id="SvgjsText1364" font-family="Poppins" x="20"
                                                y="265.0781770833334" text-anchor="end" dominant-baseline="auto"
                                                font-size="14px" font-weight="100" fill="#3e4954"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan1365">20</tspan>
                                            </text><text id="SvgjsText1366" font-family="Poppins" x="20"
                                                y="311.7738125000001" text-anchor="end" dominant-baseline="auto"
                                                font-size="14px" font-weight="100" fill="#3e4954"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan1367">0</tspan>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1277" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                    style="left: 65.3594px; top: 238.478px;">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Jan</div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                        style="display: flex;"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(255, 148, 50);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label">Running: </span><span
                                                    class="apexcharts-tooltip-text-value">20</span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                    style="left: 25.5729px; top: 312.174px;">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 27.5781px;">
                                        Jan</div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 740px; height: 396px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 548px; height: 396px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header d-sm-flex d-block pb-0 border-0">
                        <div class="d-flex align-items-center">
                            <span class="p-3 mr-3 rounded bg-info">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.8586 5.22599L5.87121 10.5543C5.50758 11.0846 5.64394 11.8068 6.17172 12.1679L11.1945 15.6098V18.9558C11.1945 19.5921 11.6995 20.125 12.3359 20.1376C12.9874 20.1477 13.5177 19.625 13.5177 18.976V15.0013C13.5177 14.6174 13.3283 14.2588 13.0126 14.0442L9.79041 11.8346L12.5025 8.95836L13.8914 12.1225C14.0758 12.5442 14.4949 12.817 14.9546 12.817H19.1844C19.8207 12.817 20.3536 12.3119 20.3662 11.6755C20.3763 11.024 19.8536 10.4937 19.2046 10.4937H15.7172C15.2576 9.44824 14.7677 8.41288 14.3409 7.35228C14.1237 6.81693 14.0025 6.5846 13.6036 6.21592C13.5227 6.14016 12.9596 5.62501 12.4571 5.16541C11.995 4.74619 11.2828 4.77397 10.8586 5.22599Z"
                                        fill="white"></path>
                                    <path
                                        d="M15.6162 5.80681C17.0861 5.80681 18.2778 4.61517 18.2778 3.1452C18.2778 1.67523 17.0861 0.483582 15.6162 0.483582C14.1462 0.483582 12.9545 1.67523 12.9545 3.1452C12.9545 4.61517 14.1462 5.80681 15.6162 5.80681Z"
                                        fill="white"></path>
                                    <path
                                        d="M4.89899 23.5164C7.60463 23.5164 9.79798 21.3231 9.79798 18.6174C9.79798 15.9118 7.60463 13.7184 4.89899 13.7184C2.19335 13.7184 0 15.9118 0 18.6174C0 21.3231 2.19335 23.5164 4.89899 23.5164Z"
                                        fill="white"></path>
                                    <path
                                        d="M19.101 23.5164C21.8066 23.5164 24 21.3231 24 18.6174C24 15.9118 21.8066 13.7184 19.101 13.7184C16.3954 13.7184 14.202 15.9118 14.202 18.6174C14.202 21.3231 16.3954 23.5164 19.101 23.5164Z"
                                        fill="white"></path>
                                </svg>
                            </span>
                            <div class="mr-auto pr-3">
                                <h4 class="text-black fs-20">Program Donasi</h4>
                                <p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </div>
                        <div class="dropdown mt-sm-0 mt-3">
                            <button type="button" class="btn rounded border border-light dropdown-toggle"
                                data-toggle="dropdown" aria-expanded="false">
                                Monthly
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pb-0" style="position: relative;">
                        <div id="chartBar2" style="min-height: 365px;">
                            <div id="apexcharts66xwal4k"
                                class="apexcharts-canvas apexcharts66xwal4k apexcharts-theme-light"
                                style="width: 679px; height: 350px;"><svg id="SvgjsSvg3900" width="679" height="350"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG3902" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(50.359375, 30)">
                                        <defs id="SvgjsDefs3901">
                                            <clipPath id="gridRectMask66xwal4k">
                                                <rect id="SvgjsRect3908" width="612.6875" height="284.1738125" x="-4"
                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMask66xwal4k">
                                                <rect id="SvgjsRect3909" width="640.6875" height="316.1738125" x="-18"
                                                    y="-18" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <line id="SvgjsLine3907" x1="0" y1="0" x2="0" y2="280.1738125" stroke="#b6b6b6"
                                            stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                            height="280.1738125" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                            stroke-width="1"></line>
                                        <g id="SvgjsG3939" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG3940" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText3942"
                                                    font-family="Poppins" x="0" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan3943">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText3945" font-family="Poppins"
                                                    x="54.97159090909091" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan3946">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText3948" font-family="Poppins"
                                                    x="109.9431818181818" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan3949">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText3951" font-family="Poppins"
                                                    x="164.9147727272727" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan3952">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText3954" font-family="Poppins"
                                                    x="219.88636363636363" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan3955">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText3957" font-family="Poppins"
                                                    x="274.85795454545456" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan3958">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText3960" font-family="Poppins"
                                                    x="329.82954545454544" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan3961">Jul</tspan>
                                                    <title>Jul</title>
                                                </text><text id="SvgjsText3963" font-family="Poppins"
                                                    x="384.8011363636363" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan3964">Aug</tspan>
                                                    <title>Aug</title>
                                                </text><text id="SvgjsText3966" font-family="Poppins"
                                                    x="439.7727272727272" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan3967">Sep</tspan>
                                                    <title>Sep</title>
                                                </text><text id="SvgjsText3969" font-family="Poppins"
                                                    x="494.7443181818181" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan3970">Oct</tspan>
                                                    <title>Oct</title>
                                                </text><text id="SvgjsText3972" font-family="Poppins"
                                                    x="549.7159090909089" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan3973">Nov</tspan>
                                                    <title>Nov</title>
                                                </text><text id="SvgjsText3975" font-family="Poppins"
                                                    x="604.6874999999998" y="309.1738125" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="14px" font-weight="100"
                                                    fill="#3e4954" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan3976">Dec</tspan>
                                                    <title>Dec</title>
                                                </text></g>
                                            <line id="SvgjsLine3977" x1="0" y1="281.1738125" x2="604.6875"
                                                y2="281.1738125" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1">
                                            </line>
                                        </g>
                                        <g id="SvgjsG3990" class="apexcharts-grid">
                                            <g id="SvgjsG3991" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine4017" x1="0" y1="0" x2="604.6875" y2="0"
                                                    stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4018" x1="0" y1="70.043453125" x2="604.6875"
                                                    y2="70.043453125" stroke="#f1f1f1" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine4019" x1="0" y1="140.08690625" x2="604.6875"
                                                    y2="140.08690625" stroke="#f1f1f1" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine4020" x1="0" y1="210.130359375" x2="604.6875"
                                                    y2="210.130359375" stroke="#f1f1f1" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine4021" x1="0" y1="280.1738125" x2="604.6875"
                                                    y2="280.1738125" stroke="#f1f1f1" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG3992" class="apexcharts-gridlines-vertical">
                                                <line id="SvgjsLine3993" x1="0" y1="0" x2="0" y2="280.1738125"
                                                    stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine3995" x1="54.97159090909091" y1="0"
                                                    x2="54.97159090909091" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine3997" x1="109.94318181818181" y1="0"
                                                    x2="109.94318181818181" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine3999" x1="164.91477272727272" y1="0"
                                                    x2="164.91477272727272" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine4001" x1="219.88636363636363" y1="0"
                                                    x2="219.88636363636363" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine4003" x1="274.8579545454545" y1="0"
                                                    x2="274.8579545454545" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine4005" x1="329.8295454545454" y1="0"
                                                    x2="329.8295454545454" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine4007" x1="384.80113636363626" y1="0"
                                                    x2="384.80113636363626" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine4009" x1="439.77272727272714" y1="0"
                                                    x2="439.77272727272714" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine4011" x1="494.744318181818" y1="0"
                                                    x2="494.744318181818" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine4013" x1="549.7159090909089" y1="0"
                                                    x2="549.7159090909089" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine4015" x1="604.6874999999998" y1="0"
                                                    x2="604.6874999999998" y2="280.1738125" stroke="#f1f1f1"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            </g>
                                            <line id="SvgjsLine3994" x1="0" y1="281.1738125" x2="0" y2="287.1738125"
                                                stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine3996" x1="54.97159090909091" y1="281.1738125"
                                                x2="54.97159090909091" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine3998" x1="109.94318181818181" y1="281.1738125"
                                                x2="109.94318181818181" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine4000" x1="164.91477272727272" y1="281.1738125"
                                                x2="164.91477272727272" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine4002" x1="219.88636363636363" y1="281.1738125"
                                                x2="219.88636363636363" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine4004" x1="274.8579545454545" y1="281.1738125"
                                                x2="274.8579545454545" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine4006" x1="329.8295454545454" y1="281.1738125"
                                                x2="329.8295454545454" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine4008" x1="384.80113636363626" y1="281.1738125"
                                                x2="384.80113636363626" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine4010" x1="439.77272727272714" y1="281.1738125"
                                                x2="439.77272727272714" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine4012" x1="494.744318181818" y1="281.1738125"
                                                x2="494.744318181818" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine4014" x1="549.7159090909089" y1="281.1738125"
                                                x2="549.7159090909089" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine4016" x1="604.6874999999998" y1="281.1738125"
                                                x2="604.6874999999998" y2="287.1738125" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine4023" x1="0" y1="280.1738125" x2="604.6875"
                                                y2="280.1738125" stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine4022" x1="0" y1="1" x2="0" y2="280.1738125"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG3910" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG3911" class="apexcharts-series" seriesName="Cycling"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath3937"
                                                    d="M 0 280.1738125L 0 163.43472395833334L 54.97159090909091 46.695635416666676L 109.94318181818181 198.45645052083333L 164.91477272727272 198.45645052083333L 219.88636363636363 280.1738125L 274.8579545454545 280.1738125L 329.82954545454544 93.39127083333332L 384.8011363636363 233.47817708333332L 439.77272727272725 186.78254166666665L 494.74431818181813 186.78254166666665L 549.715909090909 186.78254166666665L 604.6875 186.78254166666665L 604.6875 280.1738125M 604.6875 186.78254166666665z"
                                                    fill="rgba(30,167,197,0.2)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMask66xwal4k)"
                                                    pathTo="M 0 280.1738125L 0 163.43472395833334L 54.97159090909091 46.695635416666676L 109.94318181818181 198.45645052083333L 164.91477272727272 198.45645052083333L 219.88636363636363 280.1738125L 274.8579545454545 280.1738125L 329.82954545454544 93.39127083333332L 384.8011363636363 233.47817708333332L 439.77272727272725 186.78254166666665L 494.74431818181813 186.78254166666665L 549.715909090909 186.78254166666665L 604.6875 186.78254166666665L 604.6875 280.1738125M 604.6875 186.78254166666665z"
                                                    pathFrom="M -1 280.1738125L -1 280.1738125L 54.97159090909091 280.1738125L 109.94318181818181 280.1738125L 164.91477272727272 280.1738125L 219.88636363636363 280.1738125L 274.8579545454545 280.1738125L 329.82954545454544 280.1738125L 384.8011363636363 280.1738125L 439.77272727272725 280.1738125L 494.74431818181813 280.1738125L 549.715909090909 280.1738125L 604.6875 280.1738125">
                                                </path>
                                                <path id="SvgjsPath3938"
                                                    d="M 0 163.43472395833334L 54.97159090909091 46.695635416666676L 109.94318181818181 198.45645052083333L 164.91477272727272 198.45645052083333L 219.88636363636363 280.1738125L 274.8579545454545 280.1738125L 329.82954545454544 93.39127083333332L 384.8011363636363 233.47817708333332L 439.77272727272725 186.78254166666665L 494.74431818181813 186.78254166666665L 549.715909090909 186.78254166666665L 604.6875 186.78254166666665"
                                                    fill="none" fill-opacity="1" stroke="#1ea7c5" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="4" stroke-dasharray="0"
                                                    class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMask66xwal4k)"
                                                    pathTo="M 0 163.43472395833334L 54.97159090909091 46.695635416666676L 109.94318181818181 198.45645052083333L 164.91477272727272 198.45645052083333L 219.88636363636363 280.1738125L 274.8579545454545 280.1738125L 329.82954545454544 93.39127083333332L 384.8011363636363 233.47817708333332L 439.77272727272725 186.78254166666665L 494.74431818181813 186.78254166666665L 549.715909090909 186.78254166666665L 604.6875 186.78254166666665"
                                                    pathFrom="M -1 280.1738125L -1 280.1738125L 54.97159090909091 280.1738125L 109.94318181818181 280.1738125L 164.91477272727272 280.1738125L 219.88636363636363 280.1738125L 274.8579545454545 280.1738125L 329.82954545454544 280.1738125L 384.8011363636363 280.1738125L 439.77272727272725 280.1738125L 494.74431818181813 280.1738125L 549.715909090909 280.1738125L 604.6875 280.1738125">
                                                </path>
                                                <g id="SvgjsG3912" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0">
                                                    <g id="SvgjsG3914" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask66xwal4k)">
                                                        <circle id="SvgjsCircle3915" r="8" cx="0"
                                                            cy="163.43472395833334"
                                                            class="apexcharts-marker no-pointer-events w3zcr7gpf"
                                                            fill="#1ea7c5" fill-opacity="1" stroke-width="0"
                                                            stroke-opacity="0.9" rel="0" j="0" index="0"
                                                            default-marker-size="8"></circle>
                                                        <circle id="SvgjsCircle3916" r="8" cx="54.97159090909091"
                                                            cy="46.695635416666676"
                                                            class="apexcharts-marker no-pointer-events wmipa1a2s"
                                                            fill="#1ea7c5" fill-opacity="1" stroke-width="0"
                                                            stroke-opacity="0.9" rel="1" j="1" index="0"
                                                            default-marker-size="8"></circle>
                                                    </g>
                                                    <g id="SvgjsG3917" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask66xwal4k)">
                                                        <circle id="SvgjsCircle3918" r="8" cx="109.94318181818181"
                                                            cy="198.45645052083333"
                                                            class="apexcharts-marker no-pointer-events whajz0ghwf"
                                                            fill="#1ea7c5" fill-opacity="1" stroke-width="0"
                                                            stroke-opacity="0.9" rel="2" j="2" index="0"
                                                            default-marker-size="8"></circle>
                                                    </g>
                                                    <g id="SvgjsG3919" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask66xwal4k)">
                                                        <circle id="SvgjsCircle3920" r="8" cx="164.91477272727272"
                                                            cy="198.45645052083333"
                                                            class="apexcharts-marker no-pointer-events wlngr1r1y"
                                                            fill="#1ea7c5" fill-opacity="1" stroke-width="0"
                                                            stroke-opacity="0.9" rel="3" j="3" index="0"
                                                            default-marker-size="8"></circle>
                                                    </g>
                                                    <g id="SvgjsG3921" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask66xwal4k)">
                                                        <circle id="SvgjsCircle3922" r="8" cx="219.88636363636363"
                                                            cy="280.1738125"
                                                            class="apexcharts-marker no-pointer-events wkifuabw3"
                                                            fill="#1ea7c5" fill-opacity="1" stroke-width="0"
                                                            stroke-opacity="0.9" rel="4" j="4" index="0"
                                                            default-marker-size="8"></circle>
                                                    </g>
                                                    <g id="SvgjsG3923" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask66xwal4k)">
                                                        <circle id="SvgjsCircle3924" r="8" cx="274.8579545454545"
                                                            cy="280.1738125"
                                                            class="apexcharts-marker no-pointer-events w2jpkr7kmh"
                                                            fill="#1ea7c5" fill-opacity="1" stroke-width="0"
                                                            stroke-opacity="0.9" rel="5" j="5" index="0"
                                                            default-marker-size="8"></circle>
                                                    </g>
                                                    <g id="SvgjsG3925" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask66xwal4k)">
                                                        <circle id="SvgjsCircle3926" r="8" cx="329.82954545454544"
                                                            cy="93.39127083333332"
                                                            class="apexcharts-marker no-pointer-events w9t86br24"
                                                            fill="#1ea7c5" fill-opacity="1" stroke-width="0"
                                                            stroke-opacity="0.9" rel="6" j="6" index="0"
                                                            default-marker-size="8"></circle>
                                                    </g>
                                                    <g id="SvgjsG3927" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask66xwal4k)">
                                                        <circle id="SvgjsCircle3928" r="8" cx="384.8011363636363"
                                                            cy="233.47817708333332"
                                                            class="apexcharts-marker no-pointer-events wq93z13rw"
                                                            fill="#1ea7c5" fill-opacity="1" stroke-width="0"
                                                            stroke-opacity="0.9" rel="7" j="7" index="0"
                                                            default-marker-size="8"></circle>
                                                    </g>
                                                    <g id="SvgjsG3929" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask66xwal4k)">
                                                        <circle id="SvgjsCircle3930" r="8" cx="439.77272727272725"
                                                            cy="186.78254166666665"
                                                            class="apexcharts-marker no-pointer-events wjfu4t2ctl"
                                                            fill="#1ea7c5" fill-opacity="1" stroke-width="0"
                                                            stroke-opacity="0.9" rel="8" j="8" index="0"
                                                            default-marker-size="8"></circle>
                                                    </g>
                                                    <g id="SvgjsG3931" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask66xwal4k)">
                                                        <circle id="SvgjsCircle3932" r="8" cx="494.74431818181813"
                                                            cy="186.78254166666665"
                                                            class="apexcharts-marker no-pointer-events wuzbgt45n"
                                                            fill="#1ea7c5" fill-opacity="1" stroke-width="0"
                                                            stroke-opacity="0.9" rel="9" j="9" index="0"
                                                            default-marker-size="8"></circle>
                                                    </g>
                                                    <g id="SvgjsG3933" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask66xwal4k)">
                                                        <circle id="SvgjsCircle3934" r="8" cx="549.715909090909"
                                                            cy="186.78254166666665"
                                                            class="apexcharts-marker no-pointer-events whmz1knps"
                                                            fill="#1ea7c5" fill-opacity="1" stroke-width="0"
                                                            stroke-opacity="0.9" rel="10" j="10" index="0"
                                                            default-marker-size="8"></circle>
                                                    </g>
                                                    <g id="SvgjsG3935" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMask66xwal4k)">
                                                        <circle id="SvgjsCircle3936" r="8" cx="604.6875"
                                                            cy="186.78254166666665"
                                                            class="apexcharts-marker no-pointer-events w8muc7oo3"
                                                            fill="#1ea7c5" fill-opacity="1" stroke-width="0"
                                                            stroke-opacity="0.9" rel="11" j="11" index="0"
                                                            default-marker-size="8"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG3913" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine4024" x1="0" y1="0" x2="604.6875" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine4025" x1="0" y1="0" x2="604.6875" y2="0" stroke-dasharray="0"
                                            stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG4026" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG4027" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG4028" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect3906" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG3978" class="apexcharts-yaxis" rel="0"
                                        transform="translate(4.359375, 0)">
                                        <g id="SvgjsG3979" class="apexcharts-yaxis-texts-g"><text id="SvgjsText3980"
                                                font-family="Poppins" x="20" y="31.4" text-anchor="end"
                                                dominant-baseline="auto" font-size="14px" font-weight="100"
                                                fill="#3e4954" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan3981">120</tspan>
                                            </text><text id="SvgjsText3982" font-family="Poppins" x="20"
                                                y="101.443453125" text-anchor="end" dominant-baseline="auto"
                                                font-size="14px" font-weight="100" fill="#3e4954"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan3983">90</tspan>
                                            </text><text id="SvgjsText3984" font-family="Poppins" x="20"
                                                y="171.48690625" text-anchor="end" dominant-baseline="auto"
                                                font-size="14px" font-weight="100" fill="#3e4954"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan3985">60</tspan>
                                            </text><text id="SvgjsText3986" font-family="Poppins" x="20"
                                                y="241.53035937500002" text-anchor="end" dominant-baseline="auto"
                                                font-size="14px" font-weight="100" fill="#3e4954"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan3987">30</tspan>
                                            </text><text id="SvgjsText3988" font-family="Poppins" x="20" y="311.5738125"
                                                text-anchor="end" dominant-baseline="auto" font-size="14px"
                                                font-weight="100" fill="#3e4954"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan3989">0</tspan>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG3903" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(30, 167, 197);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 740px; height: 396px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";

?>