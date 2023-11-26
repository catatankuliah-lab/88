<?php $this->extend('admin/layout') ?>
<?php $this->section('content') ?>
<div class="row p-3">
    <div class="col-md-12">
        <div class="card">
            <div class="">
                <div class="row">
                    <div class="col-lg-3 border-right pr-0">
                        <div class="card-body border-bottom">
                            <h4 class="card-title mt-2">Drag &amp; Drop Event</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="calendar-events" class="">
                                        <div class="calendar-events mb-3 ui-draggable ui-draggable-handle" data-class="bg-info" style="position: relative;"><i class="fa fa-circle text-info mr-2"></i>Event One</div>
                                        <div class="calendar-events mb-3 ui-draggable ui-draggable-handle" data-class="bg-success" style="position: relative;"><i class="fa fa-circle text-success mr-2"></i> Event Two
                                        </div>
                                        <div class="calendar-events mb-3 ui-draggable ui-draggable-handle" data-class="bg-danger" style="position: relative;"><i class="fa fa-circle text-danger mr-2"></i>Event Three
                                        </div>
                                        <div class="calendar-events mb-3 ui-draggable ui-draggable-handle" data-class="bg-warning" style="position: relative;"><i class="fa fa-circle text-warning mr-2"></i>Event Four
                                        </div>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="drop-remove">
                                        <label class="custom-control-label" for="drop-remove">Remove
                                            after drop</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card-body b-l calender-sidebar">
                            <div id="calendar" class="fc fc-unthemed fc-ltr">
                                <div class="fc-toolbar fc-header-toolbar">
                                    <div class="fc-left">
                                        <div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button>
                                    </div>
                                    <div class="fc-right">
                                        <div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div>
                                    </div>
                                    <div class="fc-center">
                                        <h2>November 2023</h2>
                                    </div>
                                    <div class="fc-clear"></div>
                                </div>
                                <div class="fc-view-container" style="">
                                    <div class="fc-view fc-month-view fc-basic-view" style="">
                                        <table class="">
                                            <thead class="fc-head">
                                                <tr>
                                                    <td class="fc-head-container fc-widget-header">
                                                        <div class="fc-row fc-widget-header">
                                                            <table class="">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th>
                                                                        <th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
                                                                        <th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
                                                                        <th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
                                                                        <th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
                                                                        <th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
                                                                        <th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody class="fc-body">
                                                <tr>
                                                    <td class="fc-widget-content">
                                                        <div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 420px;">
                                                            <div class="fc-day-grid fc-unselectable">
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 70px;">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2023-10-29"></td>
                                                                                    <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2023-10-30"></td>
                                                                                    <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2023-10-31"></td>
                                                                                    <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2023-11-01"></td>
                                                                                    <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2023-11-02"></td>
                                                                                    <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2023-11-03"></td>
                                                                                    <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2023-11-04"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2023-10-29"><span class="fc-day-number">29</span></td>
                                                                                    <td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2023-10-30"><span class="fc-day-number">30</span></td>
                                                                                    <td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2023-10-31"><span class="fc-day-number">31</span></td>
                                                                                    <td class="fc-day-top fc-wed fc-past" data-date="2023-11-01"><span class="fc-day-number">1</span></td>
                                                                                    <td class="fc-day-top fc-thu fc-past" data-date="2023-11-02"><span class="fc-day-number">2</span></td>
                                                                                    <td class="fc-day-top fc-fri fc-past" data-date="2023-11-03"><span class="fc-day-number">3</span></td>
                                                                                    <td class="fc-day-top fc-sat fc-past" data-date="2023-11-04"><span class="fc-day-number">4</span></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
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
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 70px;">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2023-11-05"></td>
                                                                                    <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2023-11-06"></td>
                                                                                    <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2023-11-07"></td>
                                                                                    <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2023-11-08"></td>
                                                                                    <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2023-11-09"></td>
                                                                                    <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2023-11-10"></td>
                                                                                    <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2023-11-11"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="fc-day-top fc-sun fc-past" data-date="2023-11-05"><span class="fc-day-number">5</span></td>
                                                                                    <td class="fc-day-top fc-mon fc-past" data-date="2023-11-06"><span class="fc-day-number">6</span></td>
                                                                                    <td class="fc-day-top fc-tue fc-past" data-date="2023-11-07"><span class="fc-day-number">7</span></td>
                                                                                    <td class="fc-day-top fc-wed fc-past" data-date="2023-11-08"><span class="fc-day-number">8</span></td>
                                                                                    <td class="fc-day-top fc-thu fc-past" data-date="2023-11-09"><span class="fc-day-number">9</span></td>
                                                                                    <td class="fc-day-top fc-fri fc-past" data-date="2023-11-10"><span class="fc-day-number">10</span></td>
                                                                                    <td class="fc-day-top fc-sat fc-past" data-date="2023-11-11"><span class="fc-day-number">11</span></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
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
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 70px;">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2023-11-12"></td>
                                                                                    <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2023-11-13"></td>
                                                                                    <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2023-11-14"></td>
                                                                                    <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2023-11-15"></td>
                                                                                    <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2023-11-16"></td>
                                                                                    <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2023-11-17"></td>
                                                                                    <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2023-11-18"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="fc-day-top fc-sun fc-past" data-date="2023-11-12"><span class="fc-day-number">12</span></td>
                                                                                    <td class="fc-day-top fc-mon fc-past" data-date="2023-11-13"><span class="fc-day-number">13</span></td>
                                                                                    <td class="fc-day-top fc-tue fc-past" data-date="2023-11-14"><span class="fc-day-number">14</span></td>
                                                                                    <td class="fc-day-top fc-wed fc-past" data-date="2023-11-15"><span class="fc-day-number">15</span></td>
                                                                                    <td class="fc-day-top fc-thu fc-past" data-date="2023-11-16"><span class="fc-day-number">16</span></td>
                                                                                    <td class="fc-day-top fc-fri fc-past" data-date="2023-11-17"><span class="fc-day-number">17</span></td>
                                                                                    <td class="fc-day-top fc-sat fc-past" data-date="2023-11-18"><span class="fc-day-number">18</span></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-purple fc-draggable">
                                                                                            <div class="fc-content"><span class="fc-time">2:33p</span> <span class="fc-title">Meeting</span></div>
                                                                                        </a></td>
                                                                                    <td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-warning fc-draggable">
                                                                                            <div class="fc-content"><span class="fc-time">6:20p</span> <span class="fc-title">Meeting CNTR-JKT #4</span></div>
                                                                                        </a></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 70px;">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2023-11-19"></td>
                                                                                    <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2023-11-20"></td>
                                                                                    <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2023-11-21"></td>
                                                                                    <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2023-11-22"></td>
                                                                                    <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2023-11-23"></td>
                                                                                    <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2023-11-24"></td>
                                                                                    <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2023-11-25"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="fc-day-top fc-sun fc-past" data-date="2023-11-19"><span class="fc-day-number">19</span></td>
                                                                                    <td class="fc-day-top fc-mon fc-past" data-date="2023-11-20"><span class="fc-day-number">20</span></td>
                                                                                    <td class="fc-day-top fc-tue fc-past" data-date="2023-11-21"><span class="fc-day-number">21</span></td>
                                                                                    <td class="fc-day-top fc-wed fc-past" data-date="2023-11-22"><span class="fc-day-number">22</span></td>
                                                                                    <td class="fc-day-top fc-thu fc-past" data-date="2023-11-23"><span class="fc-day-number">23</span></td>
                                                                                    <td class="fc-day-top fc-fri fc-past" data-date="2023-11-24"><span class="fc-day-number">24</span></td>
                                                                                    <td class="fc-day-top fc-sat fc-past" data-date="2023-11-25"><span class="fc-day-number">25</span></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable">
                                                                                            <div class="fc-content"><span class="fc-time">8:47p</span> <span class="fc-title">Meeting #5</span></div>
                                                                                        </a></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 70px;">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-day fc-widget-content fc-sun fc-today " data-date="2023-11-26"></td>
                                                                                    <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2023-11-27"></td>
                                                                                    <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2023-11-28"></td>
                                                                                    <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2023-11-29"></td>
                                                                                    <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2023-11-30"></td>
                                                                                    <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2023-12-01"></td>
                                                                                    <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2023-12-02"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="fc-day-top fc-sun fc-today " data-date="2023-11-26"><span class="fc-day-number">26</span></td>
                                                                                    <td class="fc-day-top fc-mon fc-future" data-date="2023-11-27"><span class="fc-day-number">27</span></td>
                                                                                    <td class="fc-day-top fc-tue fc-future" data-date="2023-11-28"><span class="fc-day-number">28</span></td>
                                                                                    <td class="fc-day-top fc-wed fc-future" data-date="2023-11-29"><span class="fc-day-number">29</span></td>
                                                                                    <td class="fc-day-top fc-thu fc-future" data-date="2023-11-30"><span class="fc-day-number">30</span></td>
                                                                                    <td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2023-12-01"><span class="fc-day-number">1</span></td>
                                                                                    <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2023-12-02"><span class="fc-day-number">2</span></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable">
                                                                                            <div class="fc-content"><span class="fc-time">11:37a</span> <span class="fc-title">Submission #1</span></div>
                                                                                        </a></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-success fc-draggable">
                                                                                            <div class="fc-content"><span class="fc-time">12:17p</span> <span class="fc-title">Meeting #5</span></div>
                                                                                        </a></td>
                                                                                    <td></td>
                                                                                    <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable">
                                                                                            <div class="fc-content"><span class="fc-time">8:23a</span> <span class="fc-title">Meeting #3</span></div>
                                                                                        </a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 70px;">
                                                                    <div class="fc-bg">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2023-12-03"></td>
                                                                                    <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2023-12-04"></td>
                                                                                    <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2023-12-05"></td>
                                                                                    <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2023-12-06"></td>
                                                                                    <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2023-12-07"></td>
                                                                                    <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2023-12-08"></td>
                                                                                    <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2023-12-09"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="fc-content-skeleton">
                                                                        <table>
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2023-12-03"><span class="fc-day-number">3</span></td>
                                                                                    <td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2023-12-04"><span class="fc-day-number">4</span></td>
                                                                                    <td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2023-12-05"><span class="fc-day-number">5</span></td>
                                                                                    <td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2023-12-06"><span class="fc-day-number">6</span></td>
                                                                                    <td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2023-12-07"><span class="fc-day-number">7</span></td>
                                                                                    <td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2023-12-08"><span class="fc-day-number">8</span></td>
                                                                                    <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2023-12-09"><span class="fc-day-number">9</span></td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td rowspan="2"></td>
                                                                                    <td rowspan="2"></td>
                                                                                    <td rowspan="2"></td>
                                                                                    <td class="fc-event-container fc-limited"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable">
                                                                                            <div class="fc-content"><span class="fc-time">7:10a</span> <span class="fc-title">Meetup #6</span></div>
                                                                                        </a></td>
                                                                                    <td class="fc-more-cell" rowspan="1">
                                                                                        <div><a class="fc-more">+2 more</a></div>
                                                                                    </td>
                                                                                    <td rowspan="2"></td>
                                                                                    <td rowspan="2"></td>
                                                                                    <td rowspan="2"></td>
                                                                                </tr>
                                                                                <tr class="fc-limited">
                                                                                    <td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable">
                                                                                            <div class="fc-content"><span class="fc-time">12:43p</span> <span class="fc-title">Submission #2</span></div>
                                                                                        </a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>