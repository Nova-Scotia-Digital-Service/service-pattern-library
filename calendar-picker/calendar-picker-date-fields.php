<fieldset class="ns-fieldset" aria-describedby="fieldset-hint-date">
  <legend class="ns-fieldset__legend noBorder label">
    Enter a date
  </legend>
  <div id="fieldset-hint-date" class="ns-hint">
    Enter Day Month Year. For example, 17 11 2007.
  </div>

  <div class="row align-items-end">
    <div class="col-auto pr-0"><label class="ns-label" for="day2">DD</label><input type="text" id="day2" name="day" class="ns-input fw-2" pattern="[0-9]*" inputmode="numeric" value="16"></input></div>
    <div class="col-auto pr-0"><label class="ns-label" for="month2">MM</label><input type="text" id="month2" name="month" class="ns-input fw-2" pattern="[0-9]*" inputmode="numeric" value="12"></input></div>
    <div class="col-auto pr-0"><label class="ns-label" for="year2">YYYY</label><input type="text" id="year2" name="year" class="ns-input fw-4" pattern="[0-9]*" inputmode="numeric" value="2021"></input></div>
    <div class="col-auto"><button class="btn-md ns-btn-2nd ns-btn__icon btn-inline-field"  type="button" data-toggle="collapse" data-target="#collapseCalendarPicker" aria-expanded="false" aria-controls="collapseCalendarPicker"><i class="far fa-calendar-alt ns-btn__icon-left" aria-hidden="true"></i>Select from calendar</button></div>
  </div>
</fieldset>

<div class="collapse in" id="collapseCalendarPicker">
  <div class="calendar-wrapper">
    <section class="Calendar" aria-label="Calendar">
      <section aria-label="Calendar Navigation" class="Calendar-nav">
        <button id="previous" class="Calendar-nav--button Calendar-nav--button--unavailable" type="button" aria-label="Previous month" tabindex="-1">❮</button>
        <div class="Nav--month">December, 2021</div>
        <button id="next" class="Calendar-nav--button" type="button" aria-label="Next month">❯</button>
      </section>
      <div class="Calendar-grid">
        <div class="Calendar-days Calendar-row" aria-disabled="true" role="presentation" aria-hidden="true">
          <span class="Calendar-item Calendar-item--day" aria-label="Sunday">S</span>
          <span class="Calendar-item Calendar-item--day" aria-label="Monday">M</span>
          <span class="Calendar-item Calendar-item--day" aria-label="Tuesday">T</span>
          <span class="Calendar-item Calendar-item--day" aria-label="Wednesday">W</span>
          <span class="Calendar-item Calendar-item--day" aria-label="Thursday">T</span>
          <span class="Calendar-item Calendar-item--day" aria-label="Friday">F</span>
          <span class="Calendar-item Calendar-item--day" aria-label="Saturday">S</span>
        </div>
        <section id="Calendar-dates" aria-label="Calendar dates" role="application">
          <div class="Calendar-row">
            <span class="Calendar-item Calendar-item--empty"></span>
            <span class="Calendar-item Calendar-item--empty"></span>
            <button type="button" aria-label="calendar_schedular_unavailable, Tuesday December 01 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1606795200" data-day="1" data-date="2020-12-01" tabindex="-1">1</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Wednesday December 02 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1606881600" data-day="2" data-date="2020-12-02" tabindex="-1">2</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Thursday December 03 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1606968000" data-day="3" data-date="2020-12-03" tabindex="-1">3</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Friday December 04 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1607054400" data-day="4" data-date="2020-12-04" tabindex="-1">4</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Saturday December 05 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1607140800" data-day="5" data-date="2020-12-05" tabindex="-1">5</button>
          </div>
          <div class="Calendar-row">
            <button type="button" aria-label="calendar_schedular_unavailable, Sunday December 06 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1607227200" data-day="6" data-date="2020-12-06" tabindex="-1">6</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Monday December 07 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1607313600" data-day="7" data-date="2020-12-07" tabindex="-1">7</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Tuesday December 08 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1607400000" data-day="8" data-date="2020-12-08" tabindex="-1">8</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Wednesday December 09 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1607486400" data-day="9" data-date="2020-12-09" tabindex="-1">9</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Thursday December 10 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1607572800" data-day="10" data-date="2020-12-10" tabindex="-1">10</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Friday December 11 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1607659200" data-day="11" data-date="2020-12-11" tabindex="-1">11</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Saturday December 12 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1607745600" data-day="12" data-date="2020-12-12" tabindex="-1">12</button>
          </div>
          <div class="Calendar-row">
            <button type="button" aria-label="calendar_schedular_unavailable, Sunday December 13 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1607832000" data-day="13" data-date="2020-12-13" tabindex="-1">13</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Monday December 14 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1607918400" data-day="14" data-date="2020-12-14" tabindex="-1">14</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Tuesday December 15 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1608004800" data-day="15" data-date="2020-12-15" aria-current="date" tabindex="-1">15</button>
            <button type="button" aria-label="Wednesday December 16 2020" aria-pressed="true" class="Calendar-item Calendar-item--active" data-timestamp="1608091200" data-day="16" data-date="2020-12-16">16</button>
            <button type="button" aria-label="Thursday December 17 2020" aria-pressed="false" class="Calendar-item Calendar-item--active" data-timestamp="1608177600" data-day="17" data-date="2020-12-17">17</button>
            <button type="button" aria-label="Friday December 18 2020" aria-pressed="false" class="Calendar-item Calendar-item--active" data-timestamp="1608264000" data-day="18" data-date="2020-12-18">18</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Saturday December 19 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1608350400" data-day="19" data-date="2020-12-19" tabindex="-1">19</button>
          </div>
          <div class="Calendar-row">
            <button type="button" aria-label="calendar_schedular_unavailable, Sunday December 20 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1608436800" data-day="20" data-date="2020-12-20" tabindex="-1">20</button>
            <button type="button" aria-label="Monday December 21 2020" aria-pressed="false" class="Calendar-item Calendar-item--active" data-timestamp="1608523200" data-day="21" data-date="2020-12-21">21</button>
            <button type="button" aria-label="Tuesday December 22 2020" aria-pressed="false" class="Calendar-item Calendar-item--active" data-timestamp="1608609600" data-day="22" data-date="2020-12-22">22</button>
            <button type="button" aria-label="Wednesday December 23 2020" aria-pressed="false" class="Calendar-item Calendar-item--active" data-timestamp="1608696000" data-day="23" data-date="2020-12-23">23</button>
            <button type="button" aria-label="Thursday December 24 2020" aria-pressed="false" class="Calendar-item Calendar-item--active" data-timestamp="1608782400" data-day="24" data-date="2020-12-24">24</button>
            <button type="button" aria-label="Friday December 25 2020" aria-pressed="false" class="Calendar-item Calendar-item--active" data-timestamp="1608868800" data-day="25" data-date="2020-12-25">25</button>
            <button type="button" aria-label="calendar_schedular_unavailable, Saturday December 26 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1608955200" data-day="26" data-date="2020-12-26" tabindex="-1">26</button>
          </div>
          <div class="Calendar-row">
            <button type="button" aria-label="calendar_schedular_unavailable, Sunday December 27 2020" aria-pressed="false" class="Calendar-item Calendar-item--unavailable" data-timestamp="1609041600" data-day="27" data-date="2020-12-27" tabindex="-1">27</button>
            <button type="button" aria-label="Monday December 28 2020" aria-pressed="false" class="Calendar-item Calendar-item--active" data-timestamp="1609128000" data-day="28" data-date="2020-12-28">28</button>
            <button type="button" aria-label="Tuesday December 29 2020" aria-pressed="false" class="Calendar-item Calendar-item--active" data-timestamp="1609214400" data-day="29" data-date="2020-12-29">29</button>
            <button type="button" aria-label="Wednesday December 30 2020" aria-pressed="false" class="Calendar-item Calendar-item--active" data-timestamp="1609300800" data-day="30" data-date="2020-12-30">30</button>
            <button type="button" aria-label="Thursday December 31 2020" aria-pressed="false" class="Calendar-item Calendar-item--active" data-timestamp="1609387200" data-day="31" data-date="2020-12-31">31</button>
            <span class="Calendar-item Calendar-item--empty"></span><span class="Calendar-item Calendar-item--empty"></span>
          </div>
        </section>
      </div>
    </section>
  </div>
</div>
