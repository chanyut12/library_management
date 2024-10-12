<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meeting Room Booking System</title>
    <link href="{{asset('css/test.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Header Section -->
    <header class="header">
        <div class="header-logo">
            <h1>BUU LIBRARY</h1>
            <a href="#" class="meeting">Meeting Room Booking System</a>
        </div>
        <nav class="nav-gohome">
            <ul class="nav-home">
                <li><a href="https://www.lib.buu.ac.th">Home</a></li>
                <li><a href="#">Meeting Room</a></li>
            </ul>
        </nav>
        <div class="login">
            <span class="message">Unknow User</span>
            <a href="#" class="login-button">Login</a>
        </div>
    </header>


    <!-- Navbar Section -->
    <nav class="navbar">
        <!--Nav Start-->
        <ul class="nav-links">
            <li><a href="help.html">Help</a></li>
            <li><a href="room.html">Room</a></li>
            <li><a href="report.html">Report</a></li>
        </ul>
        <!--Nav End-->

        <div class="search-section">
            <p>Search :</p>
            <div class="search-box">
                <input type="text" id="search-input" onkeyup="liveSearch()" placeholder="">
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="main">
        <!-- Status Section -->
        <div class="status">
            <h1>Status of Rooms</h1>
            <div class="available text"></div>Available
            <div class="unavailable text"></div>Unavailable
            <div class="closed text"></div>Closed for renovation
        </div>

        <!-- Calendar Section -->
        <div class="calender">
            <p>September 2024</p>
            <table class="table-calender">
                <thead>
                    <tr>
                        <td>Sun</td>
                        <td>Mon</td>
                        <td>Tus</td>
                        <td>Wed</td>
                        <td>Thu</td>
                        <td>Fri</td>
                        <td>Sat</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="date" data-date="2024-09-01">1</td>
                        <td class="date" data-date="2024-09-02">2</td>
                        <td class="date" data-date="2024-09-03">3</td>
                        <td class="date" data-date="2024-09-04">4</td>
                        <td class="date" data-date="2024-09-05">5</td>
                        <td class="date" data-date="2024-09-06">6</td>
                        <td class="date" data-date="2024-09-07">7</td>
                    </tr>
                    <tr>
                        <td class="date" data-date="2024-09-08">8</td>
                        <td class="date" data-date="2024-09-09">9</td>
                        <td class="date" data-date="2024-09-10">10</td>
                        <td class="date" data-date="2024-09-11">11</td>
                        <td class="date" data-date="2024-09-12">12</td>
                        <td class="date" data-date="2024-09-13">13</td>
                        <td class="date" data-date="2024-09-14">14</td>
                    </tr>
                    <tr>
                        <td class="date" data-date="2024-09-15">15</td>
                        <td class="date" data-date="2024-09-16">16</td>
                        <td class="date" data-date="2024-09-17">17</td>
                        <td class="date" data-date="2024-09-18">18</td>
                        <td class="date" data-date="2024-09-19">19</td>
                        <td class="date" data-date="2024-09-20">20</td>
                        <td class="date" data-date="2024-09-21">21</td>
                    </tr>
                    <tr>
                        <td class="date" data-date="2024-09-22">22</td>
                        <td class="date selected" data-date="2024-09-23">23</td> <!-- Select Day -->
                        <td class="date" data-date="2024-09-24">24</td>
                        <td class="date" data-date="2024-09-25">25</td>
                        <td class="date" data-date="2024-09-26">26</td>
                        <td class="date" data-date="2024-09-27">27</td>
                        <td class="date" data-date="2024-09-28">28</td>
                    </tr>
                    <tr>
                        <td class="date" data-date="2024-09-29">29</td>
                        <td class="date" data-date="2024-09-30">30</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Booking Section -->
    <div class="booking-table">
        <table>
            <thead>
                <tr>
                    <th>Time</th>
                    <th><a href="#">Room 1 (Smart TV) (5)</a></th>
                    <th><a href="#">Room 2 (Smart TV) (5)</a></th>
                    <th><a href="#">Room 3 (Smart TV) (5)</a></th>
                    <th><a href="#">Room 4 (Smart TV) (5)</a></th>
                    <th><a href="#">Room 5 (Smart TV) (5)</a></th>
                    <th><a href="#">Room 6 (Smart TV) (5)</a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="time">08:00</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">08:30</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">09:00</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">09:30</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">09:30</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">10:00</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">10:30</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">11:00</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">11:30</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">12:00</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">12:30</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">13:00</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">13:30</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">14:00</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">14:30</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">15:00</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">15:30</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">16:00</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">16:30</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">17:00</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">17:30</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">18:00</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
                <tr>
                    <td class="time">18:30</td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- จบตารางการจองห้อง -->

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-close">
            <p>Close this Section</p>
        </div>
    </footer>

</body>

</html>