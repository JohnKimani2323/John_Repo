
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--================ Basic page needs ================-->
    <title>Bed and Breakfast Hotel | Rooms Single Slider With Sidebar</title>
    <meta charset="UTF-8" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--================ Mobile specific metas ================-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--================ Google web fonts ================-->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,900&display=swap"
      rel="stylesheet"
    />
    <!--================ Vendor CSS ================-->
    <link rel="stylesheet" href="css/fontawesome-all.min.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link
      rel="stylesheet"
      href="vendors/arcticmodal/jquery.arcticmodal-0.3.css"
    />
    <link
      rel="stylesheet"
      href="vendors/owl-carousel/assets/owl.carousel.min.css"
    />
    <!--================ Theme CSS ================-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <!--================ Vendor JS ================-->
  </head>

  <body>
    <div class="mad-preloader"></div>
    <div id="mad-page-wrapper" class="mad-page-wrapper">
      <!--================ Search Modal ================-->
      <div class="mad-d-none">
        <div id="search-modal" class="mad-modal mad-modal--search">
          <h6 class="mad-title">Search</h6>
          <!--================ Search Form ================-->
          <form class="mad-search-section">
            <input type="text" placeholder="Start Typing here..." />
            <button type="submit" class="btn">
              <i class="material-icons">search</i><span>search</span>
            </button>
          </form>
          <!--================ End of Search Form ================-->
          <button type="button" class="arcticmodal-close">
            <i class="material-icons">close</i>
          </button>
        </div>
      </div>
        <?php include_once 'includes/header.php';?>
      <!--================ End of Header ================-->
      <div
        class="
          owl-carousel
          mad-grid mad-grid--cols-1
          mad-owl-moving
          nav-size-2
          no-dots
          mad-gallery-slider
        "
      >
        <div class="mad-col"><img src="images/1920x920_img1.jpg" alt="" /></div>
        <div class="mad-col"><img src="images/1920x920_img2.jpg" alt="" /></div>
        <div class="mad-col"><img src="images/1920x920_img3.jpg" alt="" /></div>
        <div class="mad-col"><img src="images/1920x920_img4.jpg" alt="" /></div>
      </div>
      <div class="mad-content mad-single-content">
        <div class="container-fluid">
          <div class="content-element-main">
            <div class="row hr-size-3 vr-size-3 sticky-bar">
              <main id="main" class="col-xxl-9 col-lg-8">
                <div class="mad-entities mad-single-room content-element-7">
                  <div class="mad-single-room-content">
                    <div class="mad-col">
                      <h2 class="mad-title" data-hover="Superior Single Room">
                        Deluxe Suite
                      </h2>
                      <div class="mad-room-details">
                        <span class="mad-room-detail"
                          ><img
                            src="royal_beach_resort_svg/sqm.svg"
                            alt=""
                            class="svg"
                          />
                          <span>75 Sqm</span></span
                        >
                        <span class="mad-room-detail"
                          ><img
                            src="royal_beach_resort_svg/bed.svg"
                            alt=""
                            class="svg"
                          />
                          <span>1 King Bed + 2 Beds</span></span
                        >
                        <span class="mad-room-detail"
                          ><img
                            src="royal_beach_resort_svg/adult.svg"
                            alt=""
                            class="svg"
                          />
                          <span>Max 4 Adults</span></span
                        >
                        <span class="mad-room-detail"
                          ><img
                            src="royal_beach_resort_svg/view.svg"
                            alt=""
                            class="svg"
                          />
                          <span>Gardern View</span></span
                        >
                      </div>
                    </div>
                    <div class="mad-col">
                      <div class="mad-pricing-value content-element-3">
                        <span>From</span>
                        <span class="mad-pricing-value-num"
                          >$349/<span>night</span></span
                        >
                      </div>
                      <a href="#" class="btn"><span>Book This Room</span></a>
                    </div>
                  </div>
                </div>
                <!--================ Accordion ================-->
                <dl
                  role="presentation"
                  class="mad-panels mad-panels--accordion type-2"
                >
                  <dt class="mad-panels-title mad-panels-active">
                    <button
                      id="panel-7-button"
                      type="button"
                      aria-expanded="false"
                      aria-controls="panel-7"
                      aria-disabled="false"
                    >
                      Description
                    </button>
                  </dt>
                  <dd id="panel-7" class="mad-panels-definition">
                    <p class="mad-text-medium">
                      Ut tellus dolor, dapibus eget, elementum vel, cursus
                      eleifend, elit. Aenean auctor wisi et urna. Aliquam erat
                      volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum
                      dolor sit amet, consectetuer adipiscing elit. Mauris
                      fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus
                      dolor, dapibus eget, elementum vel, cursus eleifend, elit.
                      Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac
                      turpis. Integer rutrum ante eu lacus.Vestibulum libero
                      nisl, porta vel, scelerisque eget, malesuada at, neque.
                      Vivamus eget nibh. Etiam cursus leo vel metus. Nulla
                      facilisi. Aenean nec eros.
                    </p>
                  </dd>
                  <dt class="mad-panels-title">
                    <button
                      id="panel-8-button"
                      type="button"
                      aria-expanded="true"
                      aria-controls="panel-8"
                      aria-disabled="false"
                    >
                      Room Facilities
                    </button>
                  </dt>
                  <dd id="panel-8" class="mad-panels-definition">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="mad-room-details vr-type size-2 style-2">
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/kettle.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Kettle, tea & coffee </span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/bed.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Comfortable beds</span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/tv.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Flat screen TV </span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/wifi.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Free Wi-Fi</span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/wardrobe.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Wardrobe</span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/airconditioner.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Air conditioner</span></span
                          >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mad-room-details vr-type size-2 style-2">
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/slippers.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Bathrobe & slippers </span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/balcon.svg"
                              alt=""
                              class="svg"
                            />
                            <span
                              >Balcony or terrace with garden view</span
                            ></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/safe.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Safe </span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/bathroom.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Shower-bathtub combination </span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/soap.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Shampoo and soap</span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/hairdryer.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Hairdryer </span></span
                          >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="mad-room-details vr-type size-2 style-2">
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/pillow.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Extensive pillow selection </span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/minibar.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Minibar</span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/fruit.svg"
                              alt=""
                              class="svg"
                            />
                            <span
                              >Free mineral water and fresh fruit
                            </span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/breakfast.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Breakfast included </span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/table.svg"
                              alt=""
                              class="svg"
                            />
                            <span>Working table</span></span
                          >
                          <span class="mad-room-detail"
                            ><img
                              src="royal_beach_resort_svg/dish.svg"
                              alt=""
                              class="svg"
                            />
                            <span
                              >24h room service (at extra charge)</span
                            ></span
                          >
                        </div>
                      </div>
                    </div>
                  </dd>
                  <dt class="mad-panels-title">
                    <button
                      id="panel-9-button"
                      type="button"
                      aria-expanded="false"
                      aria-controls="panel-9"
                      aria-disabled="false"
                    >
                      Floor Plan
                    </button>
                  </dt>
                  <dd id="panel-9" class="mad-panels-definition">
                    <a href="#"><img src="images/plan.png" alt="" /></a>
                  </dd>
                  <dt class="mad-panels-title">
                    <button
                      id="panel-10-button"
                      type="button"
                      aria-expanded="false"
                      aria-controls="panel-10"
                      aria-disabled="false"
                    >
                      Terms and Conditions
                    </button>
                  </dt>
                  <dd id="panel-10" class="mad-panels-definition">
                    <p class="mad-text-medium">
                      Ut tellus dolor, dapibus eget, elementum vel, cursus
                      eleifend, elit. Aenean auctor wisi et urna. Aliquam erat
                      volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum
                      dolor sit amet, consectetuer adipiscing elit. Mauris
                      fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus
                      dolor, dapibus eget, elementum vel, cursus eleifend, elit.
                      Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac
                      turpis. Integer rutrum ante eu lacus.Vestibulum libero
                      nisl, porta vel, scelerisque eget, malesuada at, neque.
                      Vivamus eget nibh. Etiam cursus leo vel metus. Nulla
                      facilisi. Aenean nec eros.
                    </p>
                  </dd>
                  <dt class="mad-panels-title">
                    <button
                      id="panel-11-button"
                      type="button"
                      aria-expanded="false"
                      aria-controls="panel-11"
                      aria-disabled="false"
                    >
                      Rates
                    </button>
                  </dt>
                  <dd id="panel-11" class="mad-panels-definition">
                    <!--================ Horizontal Table ================-->
                    <div class="mad-table-wrap">
                      <table class="mad-table--responsive-md">
                        <thead>
                          <tr>
                            <th>
                              Price pre room
                              <span class="mad-table-sub">in USD</span>
                            </th>
                            <th>
                              Season 1
                              <span class="mad-table-sub">
                                06.01-31.03, 01.11-23.12</span
                              >
                            </th>
                            <th>
                              Season 2
                              <span class="mad-table-sub">
                                01.04-22.04, 24.12-28.12</span
                              >
                            </th>
                            <th>
                              Season 3
                              <span class="mad-table-sub"
                                >23.04-27.05, 20.09-31.10</span
                              >
                            </th>
                            <th>
                              Season 4
                              <span class="mad-table-sub"
                                >28.05-17.06, 01.09-19.09</span
                              >
                            </th>
                            <th>
                              Season 5
                              <span class="mad-table-sub">18.06-31.08</span>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-cell-title="Price pre room">
                              Sunday - Thursday
                            </td>
                            <td data-cell-title="Season 1">$ 99</td>
                            <td data-cell-title="Season 2">$ 159</td>
                            <td data-cell-title="Season 3">$ 229</td>
                            <td data-cell-title="Season 4">$ 319</td>
                            <td data-cell-title="Season 5">$ 439</td>
                          </tr>
                          <tr>
                            <td data-cell-title="Price pre room">
                              Friday - Saturday
                            </td>
                            <td data-cell-title="Season 1">$ 119</td>
                            <td data-cell-title="Season 2">$ 199</td>
                            <td data-cell-title="Season 3">$ 299</td>
                            <td data-cell-title="Season 4">$ 389</td>
                            <td data-cell-title="Season 5">$ 529</td>
                          </tr>
                        </tbody>
                      </table>
                      <p class="mad-text-color-3">
                        All prices are in USD per night and exclusive of GST.
                        15% Goods and Services tax is applvicable above the
                        standard rates.
                      </p>
                    </div>
                    <!--================ End of Horizontal Table ================-->
                  </dd>
                  <dt class="mad-panels-title">
                    <button
                      id="panel-12-button"
                      type="button"
                      aria-expanded="false"
                      aria-controls="panel-12"
                      aria-disabled="false"
                    >
                      Availability
                    </button>
                  </dt>
                  <dd id="panel-12" class="mad-panels-definition">
                    <div class="calendar_section">
                      <div class="mad-col full-width">
                        <div
                          
                          class="calendar_wrap mad-calendar-rendered"
                        >
                          <table class="wp-calendar">
                            <caption>
                              TODAY
                              <a class="calendar-caption-prev" href="#"
                                ><i class="material-icons"
                                  >keyboard_arrow_left</i
                                ></a
                              >
                              <a class="calendar-caption-next" href="#"
                                ><i class="material-icons"
                                  >keyboard_arrow_right</i
                                ></a
                              >
                            </caption>
                          </table>
                        </div>
                      </div>
                      <div class="mad-col">
                        <div
                          
                          class="calendar_wrap mad-calendar-rendered"
                        >
                          <table class="wp-calendar">
                            <caption>
                              <div class="mad-row">
                                <div class="mad-col">
                                  <div class="mad-custom-select">
                                    <select data-default-text="September">
                                      <option>October</option>
                                      <option>November</option>
                                      <option>December</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mad-col">
                                  <div class="mad-custom-select">
                                    <select data-default-text="2021">
                                      <option>2022</option>
                                      <option>2023</option>
                                      <option>2024</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </caption>
                            <thead class="div">
                              <tr>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="first">
                                  <div class="marker"></div>
                                </td>
                                <td>
                                  <div class="marker"></div>
                                </td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                              </tr>
                              <tr>
                                <td class="first">6</td>
                                <td>7</td>
                                <td>8</td>
                                <td >9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                              </tr>
                              <tr>
                                <td class="first">13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                              </tr>
                              <tr>
                                <td class="first">20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                              </tr>
                              <tr>
                                <td class="first">27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>
                                  <div></div>
                                </td>
                                <td>
                                  <div></div>
                                </td>
                                <td>
                                  <div></div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="mad-col">
                        <div
                          
                          class="calendar_wrap mad-calendar-rendered"
                        >
                          <table class="wp-calendar">
                            <caption>
                              October 2021
                            </caption>
                            <thead class="div">
                              <tr>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td >7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                              </tr>
                              <tr>
                                <td class="first">11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                              </tr>
                              <tr>
                                <td class="first">18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                              </tr>
                              <tr>
                                <td class="first">25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </dd>
                  <dt class="mad-panels-title">
                    <button
                      id="panel-13-button"
                      type="button"
                      aria-expanded="false"
                      aria-controls="panel-13"
                      aria-disabled="false"
                    >
                      Reservation Form
                    </button>
                  </dt>
                  <dd id="panel-13" class="mad-panels-definition">
                    <p class="mad-text-color-2">
                      Required fields are followed by *
                    </p>
                    <form class="mad-form type-2">
                      <div class="mad-form-row">
                        <div class="mad-form-col">
                          <label>Check-in Date *</label>
                          <div class="mad-datepicker">
                            <div class="mad-datepicker-body">
                              <span class="mad-datepicker-others">
                                <span class="mad-datepicker-month-year"
                                  >Friday, 15 April</span
                                >
                              </span>
                            </div>
                            <div class="mad-datepicker-select">
                              <div
                                
                                class="calendar_wrap mad-calendar-rendered"
                              >
                                <table class="wp-calendar">
                                  <caption>
                                    September 2021
                                    <a class="calendar-caption-prev" href="#"
                                      ><i class="material-icons"
                                        >keyboard_arrow_left</i
                                      ></a
                                    >
                                    <a class="calendar-caption-next" href="#"
                                      ><i class="material-icons"
                                        >keyboard_arrow_right</i
                                      ></a
                                    >
                                  </caption>
                                  <thead class="div">
                                    <tr>
                                      <th>Sun</th>
                                      <th>Mon</th>
                                      <th>Tue</th>
                                      <th>Wed</th>
                                      <th>Thu</th>
                                      <th>Fri</th>
                                      <th>Sat</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="first">
                                        <div class="marker">30</div>
                                      </td>
                                      <td>
                                        <div class="marker">31</div>
                                      </td>
                                      <td>1</td>
                                      <td>2</td>
                                      <td>3</td>
                                      <td>4</td>
                                      <td>5</td>
                                    </tr>
                                    <tr>
                                      <td class="first">6</td>
                                      <td>7</td>
                                      <td>8</td>
                                      <td ><a href="#">9</a></td>
                                      <td>10</td>
                                      <td>11</td>
                                      <td>12</td>
                                    </tr>
                                    <tr>
                                      <td class="first">13</td>
                                      <td>14</td>
                                      <td>15</td>
                                      <td>16</td>
                                      <td>17</td>
                                      <td>18</td>
                                      <td>19</td>
                                    </tr>
                                    <tr>
                                      <td class="first">20</td>
                                      <td>21</td>
                                      <td>22</td>
                                      <td>23</td>
                                      <td>24</td>
                                      <td>25</td>
                                      <td>26</td>
                                    </tr>
                                    <tr>
                                      <td class="first">27</td>
                                      <td>28</td>
                                      <td>29</td>
                                      <td>30</td>
                                      <td>
                                        <div class="marker">1</div>
                                      </td>
                                      <td>
                                        <div class="marker">2</div>
                                      </td>
                                      <td>
                                        <div class="marker">3</div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mad-form-col">
                          <label>Check-out Date *</label>
                          <div class="mad-datepicker">
                            <div class="mad-datepicker-body">
                              <span class="mad-datepicker-others">
                                <span class="mad-datepicker-month-year"
                                  >Wednesday, 27 April</span
                                >
                              </span>
                            </div>
                            <div class="mad-datepicker-select">
                              <div
                                
                                class="calendar_wrap mad-calendar-rendered"
                              >
                                <table class="wp-calendar">
                                  <caption>
                                    September 2021
                                    <a class="calendar-caption-prev" href="#"
                                      ><i class="material-icons"
                                        >keyboard_arrow_left</i
                                      ></a
                                    >
                                    <a class="calendar-caption-next" href="#"
                                      ><i class="material-icons"
                                        >keyboard_arrow_right</i
                                      ></a
                                    >
                                  </caption>
                                  <thead class="div">
                                    <tr>
                                      <th>Sun</th>
                                      <th>Mon</th>
                                      <th>Tue</th>
                                      <th>Wed</th>
                                      <th>Thu</th>
                                      <th>Fri</th>
                                      <th>Sat</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="first">
                                        <div class="marker">30</div>
                                      </td>
                                      <td>
                                        <div class="marker">31</div>
                                      </td>
                                      <td>1</td>
                                      <td>2</td>
                                      <td>3</td>
                                      <td>4</td>
                                      <td>5</td>
                                    </tr>
                                    <tr>
                                      <td class="first">6</td>
                                      <td>7</td>
                                      <td>8</td>
                                      <td ><a href="#">9</a></td>
                                      <td>10</td>
                                      <td>11</td>
                                      <td>12</td>
                                    </tr>
                                    <tr>
                                      <td class="first">13</td>
                                      <td>14</td>
                                      <td>15</td>
                                      <td>16</td>
                                      <td>17</td>
                                      <td>18</td>
                                      <td>19</td>
                                    </tr>
                                    <tr>
                                      <td class="first">20</td>
                                      <td>21</td>
                                      <td>22</td>
                                      <td>23</td>
                                      <td>24</td>
                                      <td>25</td>
                                      <td>26</td>
                                    </tr>
                                    <tr>
                                      <td class="first">27</td>
                                      <td>28</td>
                                      <td>29</td>
                                      <td>30</td>
                                      <td>
                                        <div class="marker">1</div>
                                      </td>
                                      <td>
                                        <div class="marker">2</div>
                                      </td>
                                      <td>
                                        <div class="marker">3</div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mad-form-col short-col">
                          <label>Adults</label>
                          <div class="mad-custom-select">
                            <select data-default-text="1">
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>
                        </div>
                        <div class="mad-form-col short-col">
                          <label>children</label>
                          <div class="mad-custom-select">
                            <select data-default-text=" 0">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                            </select>
                          </div>
                        </div>
                        <div class="mad-form-col">
                          <button type="submit" class="btn btn-big">
                            Check Availability
                          </button>
                        </div>
                      </div>
                    </form>
                  </dd>
                  <dt class="mad-panels-title">
                    <button
                      id="panel-14-button"
                      type="button"
                      aria-expanded="false"
                      aria-controls="panel-14"
                      aria-disabled="false"
                    >
                      Reviews
                    </button>
                  </dt>
                  <dd id="panel-14" class="mad-panels-definition">
                    <div class="content-element-4">
                      <div class="mad-review-section">
                        <div class="mad-review-box">
                          <div class="mad-review-box-inner">
                            <span>4.8</span>
                            <span>Good</span>
                          </div>
                        </div>
                        <div
                          class="mad-progress-bars mad-progress-bars--secondary"
                        >
                          <div class="mad-progress-bars-item">
                            <strong
                              id="progress-bar-title-5"
                              data-value="4.5"
                              class="mad-progress-bar-title"
                              >Accommodation</strong
                            >
                            <div
                              role="progressbar"
                              aria-labelledby="progress-bar-title-5"
                              class="mad-progress-bar"
                            >
                              <div
                                style="width: 75%"
                                class="mad-progress-bar-indicator"
                              ></div>
                            </div>
                          </div>
                          <div class="mad-progress-bars-item">
                            <strong
                              id="progress-bar-title-6"
                              data-value="4.3"
                              class="mad-progress-bar-title"
                              >Location</strong
                            >
                            <div
                              role="progressbar"
                              aria-labelledby="progress-bar-title-6"
                              class="mad-progress-bar"
                            >
                              <div
                                style="width: 70%"
                                class="mad-progress-bar-indicator"
                              ></div>
                            </div>
                          </div>
                          <div class="mad-progress-bars-item">
                            <strong
                              id="progress-bar-title-7"
                              data-value="4.8"
                              class="mad-progress-bar-title"
                              >Meals</strong
                            >
                            <div
                              role="progressbar"
                              aria-labelledby="progress-bar-title-7"
                              class="mad-progress-bar"
                            >
                              <div
                                style="width: 85%"
                                class="mad-progress-bar-indicator"
                              ></div>
                            </div>
                          </div>
                          <div class="mad-progress-bars-item">
                            <strong
                              id="progress-bar-title-8"
                              data-value="4.9"
                              class="mad-progress-bar-title"
                              >Facilities</strong
                            >
                            <div
                              role="progressbar"
                              aria-labelledby="progress-bar-title-8"
                              class="mad-progress-bar"
                            >
                              <div
                                style="width: 95%"
                                class="mad-progress-bar-indicator"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="content-element-4">
                      <div class="content-element-2">
                        <div class="btn-set justify-content-between">
                          <div class="mad-col"><h6>2 Reviews</h6></div>
                          <a href="#" class="btn">write a review</a>
                        </div>
                      </div>
                      <ol class="comments-list">
                        <li class="comment comment-has-children">
                          <div class="comment-body clearfix">
                            <div class="comment-author-avatar">
                              <a href="#"
                                ><img
                                  src="images/104x104_photo1.jpg"
                                  alt="John Smith"
                              /></a>
                            </div>
                            <div class="comment-author-info">
                              <div class="comment-row">
                                <cite class="fn">John Smith</cite>
                                <div class="comment-meta">
                                  <time datetime="2021-11-23"
                                    >November 23, 2021</time
                                  >
                                  <span>&nbsp;/&nbsp;</span>
                                  <div
                                    data-estimate="5"
                                    class="mad-rating"
                                  ></div>
                                </div>
                              </div>
                              <div class="comment-content">
                                <p>
                                  Mauris accumsan nulla vel diam. Sed in lacus
                                  ut enim adipiscing aliquet. Nulla venenatis.
                                  In pede mi, aliquet sit amet, euismod
                                  in,auctor ut, ligula.
                                </p>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="comment">
                          <div class="comment-body">
                            <div class="comment-author-avatar">
                              <a href="#"
                                ><img
                                  src="images/104x104_photo2.jpg"
                                  alt="Sara Franklin"
                              /></a>
                            </div>
                            <div class="comment-author-info">
                              <div class="comment-row">
                                <cite class="fn">Sara Franklin</cite>
                                <div class="comment-meta">
                                  <time datetime="2021-11-23"
                                    >November 23, 2021</time
                                  >
                                  <span>&nbsp;/&nbsp;</span>
                                  <div
                                    data-estimate="4.5"
                                    class="mad-rating"
                                  ></div>
                                </div>
                              </div>
                              <div class="comment-content">
                                <p>
                                  Mauris accumsan nulla vel diam. Sed in lacus
                                  ut enim adipiscing aliquet. Nulla venenatis.
                                  In pede mi, aliquet sit amet, euismod
                                  in,auctor ut, ligula.
                                </p>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ol>
                    </div>
                    <div class="content-element-4">
                      <h6>Add a Review</h6>
                      <p class="mad-text-color-2 content-element-4">
                        Your email address will not be published. Required
                        fields are marked *
                      </p>
                      <div class="content-element-4">
                        <div class="row">
                          <div class="col-md-3 col-sm-6">
                            <label class="content-element-2"
                              >Accommodation</label
                            >
                            <div
                              data-estimate="0"
                              class="mad-rating size-2"
                            ></div>
                          </div>
                          <div class="col-md-3 col-sm-6">
                            <label class="content-element-2">Location</label>
                            <div
                              data-estimate="0"
                              class="mad-rating size-2"
                            ></div>
                          </div>
                          <div class="col-md-3 col-sm-6">
                            <label class="content-element-2">Meals</label>
                            <div
                              data-estimate="0"
                              class="mad-rating size-2"
                            ></div>
                          </div>
                          <div class="col-md-3 col-sm-6">
                            <label class="content-element-2">facilities</label>
                            <div
                              data-estimate="0"
                              class="mad-rating size-2"
                            ></div>
                          </div>
                        </div>
                      </div>
                      <form class="mad-form full-width type-2">
                        <div class="row">
                          <div class="col-12">
                            <label>Your Review <span>*</span></label>
                            <textarea
                              rows="4"
                              placeholder="Your Review"
                            ></textarea>
                          </div>
                          <div class="col-12">
                            <div class="row">
                              <div class="col-sm-6">
                                <label>Name <span>*</span></label>
                                <input type="text" placeholder="Your Name" />
                              </div>
                              <div class="col-sm-6">
                                <label>Email <span>*</span></label>
                                <input
                                  type="email"
                                  placeholder="Your Email Address"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <a href="#" class="btn btn-big">Post review</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </dd>
                </dl>
                <!--================ End of Accordion ================-->
              </main>
              <aside id="sidebar" class="col-xxl-3 col-lg-4 mad-sidebar">
                <div class="mad-widget">
                  <div class="mad-booking-wrap size-2">
                    <h3 class="mad-booking-title">
                      <i class="mad-booking-icon"
                        ><img
                          src="royal_beach_resort_svg/calendar.svg"
                          alt=""
                          class="svg" /></i
                      ><span>Check Availability</span>
                    </h3>
                    <div class="mad-form-row">
                      <div class="mad-form-col">
                        <label>Arrival Date</label>
                        <div class="mad-datepicker">
                          <div class="mad-datepicker-body">
                            <span class="mad-datepicker-others">
                              <span class="mad-datepicker-month-year"
                                >Friday, 15 April</span
                              >
                            </span>
                          </div>
                          <div class="mad-datepicker-select">
                            <div
                              
                              class="calendar_wrap mad-calendar-rendered"
                            >
                              <table class="wp-calendar">
                                <caption>
                                  September 2021
                                  <a class="calendar-caption-prev" href="#"
                                    ><i class="material-icons"
                                      >keyboard_arrow_left</i
                                    ></a
                                  >
                                  <a class="calendar-caption-next" href="#"
                                    ><i class="material-icons"
                                      >keyboard_arrow_right</i
                                    ></a
                                  >
                                </caption>
                                <thead class="div">
                                  <tr>
                                    <th>Sun</th>
                                    <th>Mon</th>
                                    <th>Tue</th>
                                    <th>Wed</th>
                                    <th>Thu</th>
                                    <th>Fri</th>
                                    <th>Sat</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="first">
                                      <div class="marker">30</div>
                                    </td>
                                    <td>
                                      <div class="marker">31</div>
                                    </td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                  </tr>
                                  <tr>
                                    <td class="first">6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td ><a href="#">9</a></td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                  </tr>
                                  <tr>
                                    <td class="first">13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                    <td>19</td>
                                  </tr>
                                  <tr>
                                    <td class="first">20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                  </tr>
                                  <tr>
                                    <td class="first">27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>
                                      <div class="marker">1</div>
                                    </td>
                                    <td>
                                      <div class="marker">2</div>
                                    </td>
                                    <td>
                                      <div class="marker">3</div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mad-form-col">
                        <label>Departure Date</label>
                        <div class="mad-datepicker">
                          <div class="mad-datepicker-body">
                            <span class="mad-datepicker-others">
                              <span class="mad-datepicker-month-year"
                                >Wednesday, 27 April</span
                              >
                            </span>
                          </div>
                          <div class="mad-datepicker-select">
                            <div
                              
                              class="calendar_wrap mad-calendar-rendered"
                            >
                              <table class="wp-calendar">
                                <caption>
                                  September 2021
                                  <a class="calendar-caption-prev" href="#"
                                    ><i class="material-icons"
                                      >keyboard_arrow_left</i
                                    ></a
                                  >
                                  <a class="calendar-caption-next" href="#"
                                    ><i class="material-icons"
                                      >keyboard_arrow_right</i
                                    ></a
                                  >
                                </caption>
                                <thead class="div">
                                  <tr>
                                    <th>Sun</th>
                                    <th>Mon</th>
                                    <th>Tue</th>
                                    <th>Wed</th>
                                    <th>Thu</th>
                                    <th>Fri</th>
                                    <th>Sat</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="first">
                                      <div class="marker">30</div>
                                    </td>
                                    <td>
                                      <div class="marker">31</div>
                                    </td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                  </tr>
                                  <tr>
                                    <td class="first">6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td ><a href="#">9</a></td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                  </tr>
                                  <tr>
                                    <td class="first">13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                    <td>18</td>
                                    <td>19</td>
                                  </tr>
                                  <tr>
                                    <td class="first">20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                    <td>25</td>
                                    <td>26</td>
                                  </tr>
                                  <tr>
                                    <td class="first">27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>
                                      <div class="marker">1</div>
                                    </td>
                                    <td>
                                      <div class="marker">2</div>
                                    </td>
                                    <td>
                                      <div class="marker">3</div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mad-form-col">
                        <label>Rooms</label>
                        <div class="mad-custom-select">
                          <select data-default-text="1 room">
                            <option>2 rooms</option>
                            <option>3 rooms</option>
                            <option>4 rooms</option>
                          </select>
                        </div>
                      </div>
                      <div class="mad-form-col short-col">
                        <div class="row">
                          <div class="col-lg-6">
                            <label>Adults</label>
                            <div class="quantity size-2">
                              <input type="text" value="1" readonly="" />
                              <button type="button" class="qty-plus">
                                <i class="material-icons">keyboard_arrow_up</i>
                              </button>
                              <button type="button" class="qty-minus">
                                <i class="material-icons"
                                  >keyboard_arrow_down</i
                                >
                              </button>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <label>children</label>
                            <div class="quantity size-2">
                              <input type="text" value="0" readonly="" />
                              <button type="button" class="qty-plus">
                                <i class="material-icons">keyboard_arrow_up</i>
                              </button>
                              <button type="button" class="qty-minus">
                                <i class="material-icons"
                                  >keyboard_arrow_down</i
                                >
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mad-form-col">
                        <label>Rate per night</label>
                        <div class="mad-range-slider-field">
                          <div class="mad-range-slider"></div>
                          <input
                            type="text"
                            value="$0"
                            name="check_availability_price"
                            readonly
                            class="mad-range-slider-input"
                          />
                          <input
                            type="text"
                            value="$999"
                            name="check_availability_price"
                            readonly
                            class="mad-range-slider-input2"
                          />
                        </div>
                      </div>
                      <div class="mad-form-col">
                        <label class="content-element">Amenities</label>
                        <div style="display: block" class="mad-toggled-fields">
                          <input
                            type="checkbox"
                            name="checkbox-11"
                            id="checkbox-11"
                          />
                          <label for="checkbox-11" class="mad-label-checkbox"
                            >Air Conditioner</label
                          >
                          <input
                            type="checkbox"
                            name="checkbox-21"
                            id="checkbox-21"
                          />
                          <label for="checkbox-21" class="mad-label-checkbox"
                            >Family Friendly</label
                          >
                          <input
                            type="checkbox"
                            name="checkbox-31"
                            id="checkbox-31"
                          />
                          <label for="checkbox-31" class="mad-label-checkbox"
                            >Hair Dryer</label
                          >
                          <input
                            type="checkbox"
                            name="checkbox-41"
                            id="checkbox-41"
                          />
                          <label for="checkbox-41" class="mad-label-checkbox"
                            >LCD Television</label
                          >
                          <input
                            type="checkbox"
                            name="checkbox-51"
                            id="checkbox-51"
                          />
                          <label for="checkbox-51" class="mad-label-checkbox"
                            >Minibar</label
                          >
                          <input
                            type="checkbox"
                            name="checkbox-61"
                            id="checkbox-61"
                          />
                          <label for="checkbox-61" class="mad-label-checkbox"
                            >No Smoking</label
                          >
                          <input
                            type="checkbox"
                            name="checkbox-71"
                            id="checkbox-71"
                          />
                          <label for="checkbox-71" class="mad-label-checkbox"
                            >Parking</label
                          >
                          <input
                            type="checkbox"
                            name="checkbox-81"
                            id="checkbox-81"
                          />
                          <label for="checkbox-81" class="mad-label-checkbox"
                            >Pets Allowed</label
                          >
                          <input
                            type="checkbox"
                            name="checkbox-91"
                            id="checkbox-91"
                          />
                          <label for="checkbox-91" class="mad-label-checkbox"
                            >Safe Deposit Box</label
                          >
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn">
                      Check Availability
                    </button>
                  </div>
                </div>
                <div class="mad-widget">
                  <div class="mad-banners">
                    <a href="#" class="mad-banner">
                      <span
                        class="mad-banner-main-img"
                        data-bg-image-src="images/576x528_img1.jpg"
                      ></span>
                      <span
                        class="mad-banner-hover-img"
                        data-bg-image-src="images/576x528_img5.jpg"
                      ></span>
                      <div class="mad-banner-content">
                        <h3 class="mad-banner-title">
                          Offers & <br />
                          Packages
                        </h3>
                          <div class="btn btn-big">Explore More</div>
                      </div>
                    </a>
                  </div>
                </div>
              </aside>
            </div>
          </div>
          <h2 class="mad-page-title">Related Rooms</h2>
          <div class="mad-entities with-hover align-center type-3 item-col-3">
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="rooms_single_image.html"
                    ><img src="images/576x576_img10.jpg" alt=""
                  /></a>
                </div>
                <div class="mad-entity-content">
                  <h4 class="mad-entity-title">Deluxe Double Room</h4>
                  <div class="mad-pricing-value">
                    <span>From</span>
                    <span class="mad-pricing-value-num">$329/</span>
                    <span>night</span>
                  </div>
                  <div class="mad-entity-footer">
                    <div class="btn-set justify-content-center">
                      <a
                        href="rooms_single_image_sidebar.html"
                        class="btn btn-big"
                        >Book Now</a
                      >
                      <a
                        href="rooms_single_slider_sidebar.html"
                        class="btn btn-big style-2"
                        >Details</a
                      >
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="rooms_single_image.html"
                    ><img src="images/576x576_img11.jpg" alt=""
                  /></a>
                </div>
                <div class="mad-entity-content">
                  <h4 class="mad-entity-title">Deluxe Suite</h4>
                  <div class="mad-pricing-value">
                    <span>From</span>
                    <span class="mad-pricing-value-num">$349/</span>
                    <span>night</span>
                  </div>
                  <div class="mad-entity-footer">
                    <div class="btn-set justify-content-center">
                      <a
                        href="rooms_single_image_sidebar.html"
                        class="btn btn-big"
                        >Book Now</a
                      >
                      <a
                        href="rooms_single_slider_sidebar.html"
                        class="btn btn-big style-2"
                        >Details</a
                      >
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="rooms_single_image.html"
                    ><img src="images/576x576_img12.jpg" alt=""
                  /></a>
                </div>
                <div class="mad-entity-content">
                  <h4 class="mad-entity-title">Honeymoon Villa</h4>
                  <div class="mad-pricing-value">
                    <span>From</span>
                    <span class="mad-pricing-value-num">$399/</span>
                    <span>night</span>
                  </div>
                  <div class="mad-entity-footer">
                    <div class="btn-set justify-content-center">
                      <a
                        href="rooms_single_image_sidebar.html"
                        class="btn btn-big"
                        >Book Now</a
                      >
                      <a
                        href="rooms_single_slider_sidebar.html"
                        class="btn btn-big style-2"
                        >Details</a
                      >
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
          </div>
        </div>
      </div>
      <!--================ Footer ================-->
      <footer id="mad-footer" class="mad-footer footer-3">
        <!--================ Footer row ================-->
        <div class="mad-footer-main">
          <div class="container-fluid">
            <div class="row justify-content-between vr-size-2">
              <div class="col-xl-2 col-lg-4 col-sm-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <a href="#" class="mad-logo content-element-2"
                    ><img src="images/logo5.png" alt=""
                  /></a>
                  <p class="copyrights">
                    Copyright � 2021 <a href="#">H�tel Priv�</a>. <br />
                    All Rights Reserved.
                  </p>
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-xl-2 col-lg-4 col-sm-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h6 class="mad-widget-title">Current Weather</h6>
                  <div class="mad-footer-subtitle">Paris, France</div>
                  <div class="mad-weather-section">
                    <div class="mad-weather-icon">
                      <img
                        src="royal_beach_resort_svg/sun.svg"
                        alt=""
                        class="svg"
                      />
                    </div>
                    <div class="mad-weather-temp">
                      <span class="mad-weather-num">15</span>
                      <span class="mad-weather-let">�C / �F</span>
                    </div>
                  </div>
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-xl-2 col-lg-4 col-sm-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h6 class="mad-widget-title">Menu</h6>
                  <div class="mad-vr-list menu">
                    <ul>
                      <li>
                        <a href="pages_about.html" class="mad-text-link">
                          <div class="link-container">
                            <span class="link-title1 title">About</span>
                            <span class="link-title2 title">About</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="pages_offers.html" class="mad-text-link">
                          <div class="link-container">
                            <span class="link-title1 title"
                              >Special Offers</span
                            >
                            <span class="link-title2 title"
                              >Special Offers</span
                            >
                          </div>
                        </a>
                      </li>
                      <li>
                        <a
                          href="blog_classic_sidebar.html"
                          class="mad-text-link"
                        >
                          <div class="link-container">
                            <span class="link-title1 title">News</span>
                            <span class="link-title2 title">News</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="pages_contact_v1.html" class="mad-text-link">
                          <div class="link-container">
                            <span class="link-title1 title">Contact Us</span>
                            <span class="link-title2 title">Contact Us</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h6 class="mad-widget-title">Stay Connected</h6>
                  <div class="mad-footer-subtitle">
                    Follow us on social media channels
                  </div>
                  <div class="mad-social-icons size-2">
                    <ul>
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-tripadvisor"></i></a>
                      </li>
                    </ul>
                  </div>
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-xl-3 col-lg-8 col-sm-12">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h6 class="mad-widget-title">Newsletter Sign Up</h6>
                  <form class="mad-newsletter-form">
                    <div class="mad-col">
                      <div class="mad-footer-subtitle">
                        Sign up for news and special offers
                      </div>
                      <input
                        type="email"
                        name="email"
                        placeholder="Enter Email Address"
                      />
                    </div>
                    <div class="mad-col">
                      <button type="submit" class="btn btn-huge btn-style-3">
                        Subscribe
                      </button>
                    </div>
                  </form>
                </section>
                <!--================ End of Widget ================-->
              </div>
            </div>
          </div>
        </div>
        <!--================ End of Footer row ================-->
      </footer>
      <!--================ End of Footer ================-->
    </div>
    <script src="vendors/modernizr.js"></script>
    <script src="vendors/jquery-3.6.0.min.js"></script>
    <script src="vendors/jquery.easing.1.3.min.js"></script>
    <script src="vendors/jquery.parallax-1.1.3.min.js"></script>
    <script src="vendors/monkeysan.accordion.js"></script>
    <script src="vendors/monkeysan.jquery.nav.1.0.js"></script>
    <script src="vendors/monkeysan.validator.min.js"></script>
    <script src="vendors/handlebars-v4.0.5.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
    <script src="vendors/retina.min.js"></script>
    <script src="vendors/sticky-sidebar.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/mad.customselect.js"></script>
    <script src="js/modules/mad.alert-box.min.js"></script>
    <script src="js/modules/mad.newsletter-form.min.js"></script>
    <script src="js/modules/mad.sticky-header-section.min.js"></script>
    <script src="js/mad.app.js"></script>
  </body>
</html>
