<script type="text/javascript">
$('input[type="checkbox"]').change(function(e) {

  var checked = $(this).prop("checked"), container = $(this).parent(), siblings = container.siblings();
  container.find('input[type="checkbox"]').prop({indeterminate: false, checked: checked});

  function checkSiblings(el) {
    var parent = el.parent().parent(), all = true;
    el.siblings().each(function() {
      let returnValue = all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
      return returnValue;
    });

    if (all && checked) {
      parent.children('input[type="checkbox"]').prop({indeterminate: false, checked: checked});
      checkSiblings(parent);

    } else if (all && !checked) {
      parent.children('input[type="checkbox"]').prop("checked", checked);
      parent.children('input[type="checkbox"]').prop("indeterminate", (parent.find('input[type="checkbox"]:checked').length > 0));
      checkSiblings(parent);

    } else {
      el.parents("li").children('input[type="checkbox"]').prop({indeterminate: true, checked: false});
    }
  }
  checkSiblings(container);
});
</script>

<style>
  form{margin-top: 20px;}
  .WH_Search input[type=text] {
    width: 100px;
    height: 25px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 8px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 1.0s ease-in-out;
  }
  .WH_Search input[type=text]:focus {width: 25%;}

  select {height: 25px;}

  .grid-container {
    display: grid;
    grid-gap: 10px;
    padding: 10px;
  }
  .grid-item {padding: 10px;}
  .item1 {  grid-column: 1;  grid-row: 1 / span 2;}
  .item2 {  grid-column: 2;  grid-row: 1 / span 2;}
  .item3 {  grid-column: 1 / span 2;  grid-row: 3; align-items: center;}
  .item4 {  grid-column: 1 / span 2;  grid-row: 4;}
  .item5 {  grid-column: 1 / span 2;  grid-row: 5;}
  .item6 {  grid-column: 1 / span 2;  grid-row: 6;}

  button {
    align-items: center;
    justify-content: center;
  }
</style>

<div class="WH_Search">
  <form class="row justify-content-center" action = "WH_Search.php" method="postcc">
  <div>
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="Radio00">
    <label class="form-check-label" for="Radio00">
      <form class="SearchBox"><input type="text" name="search" placeholder="Search.."></form>
    </label>
  </div><br>

  <div>
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="Radio01">
    <label class="form-check-label" for="Radio01">????????????:
      <select id="industry" name="industry">
        <option value="0">??????</option>
        <option value="1">?????????(IoT)</option>
        <option value="2">?????????????????????(AIoT)</option>
        <option value="3">????????????</option>
        <option value="4">??????</option>
      </select>
    </label>
  </div><br>

  <div>
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="Radio02">
    <label class="form-check-label" for="Radio02">
      <label for="stock_number">????????????????????????:</label>
      <input type="text" name="name" value="" autofocus/>
    </label>
  </div><br>

  <div>
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="Radio03">
    <label class="form-check-label" for="Radio03">
      <label for="company_name_chinese">????????????????????????:</label>
      <input type="text" name="name" value="" autofocus/>
    </label>
  </div><br>

  <div>
    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="Radio04">
    <label class="form-check-label" for="Radio04">
      <label for="Partner_institution_name">??????????????????:</label>
      <input type="text" name="name" value="" autofocus/>
    </label>
  </div><br>

  <fieldset>
    <legend for="cooperation_contract">????????????</legend>
    <div class="grid-container">
      <div class="grid-item item1">
      <h3>??????????????????</h3>
      <ul>
        <li><input type="checkbox" name="partner" id="partner"><label for="partner">??????/?????????</label>
          <ul>
            <li><input type="checkbox" name="partner-1" id="partner-1"><label for="partner-1">????????????</label></li>
            <li><input type="checkbox" name="partner-2" id="partner-2"><label for="partner-2">????????????</label></li>
            <li><input type="checkbox" name="partner-3" id="partner-3"><label for="partner-3">??????</label></li>
            <li><input type="checkbox" name="partner-4" id="partner-4"><label for="partner-4">????????????</label></li>
            <li><input type="checkbox" name="partner-5" id="partner-5"><label for="partner-5">??????</label></li>
            <li><input type="checkbox" name="partner-6" id="partner-6"><label for="partner-6">??????</label></li>
            <li><input type="checkbox" name="partner-7" id="partner-7"><label for="partner-7">??????</label></li>
            <li><input type="checkbox" name="partner-8" id="partner-8"><label for="partner-8">??????</label></li>
          </ul>
        </li>
      </ul>
    </div><br>

    <div class="grid-item item2">
      <h3>??????????????????</h3>
      <ul>
        <li><input type="checkbox" name="R&D" id="R&D"><label for="R&D">R & D ??????</label>
        <ul>
          <li><input type="checkbox" name="R&D-1" id="R&D-1"><label for="R&D-1">????????????</label></li>
          <li><input type="checkbox" name="R&D-2" id="R&D-1"><label for="R&D-2">????????????</label></li>
          <li><input type="checkbox" name="R&D-3" id="R&D-1"><label for="R&D-3">????????????</label></li>
          <li><input type="checkbox" name="R&D-4" id="R&D-1"><label for="R&D-4">????????????</label></li>
          <li><input type="checkbox" name="R&D-5" id="R&D-1"><label for="R&D-5">????????????</label></li>
        </ul>
        </li>
        <li><input type="checkbox" name="Non-R&D" id="Non-R&D"><label for="Non-R&D">?????????</label>
        <ul>
          <li><input type="checkbox" name="Non-R&D-1" id="Non-R&D-1"><label for="Non-R&D-1">??????</label></li>
          <li><input type="checkbox" name="Non-R&D-2" id="Non-R&D-2"><label for="Non-R&D-2">??????</label></li>
          <li><input type="checkbox" name="Non-R&D-3" id="Non-R&D-3"><label for="Non-R&D-3">??????</label></li>
          <li><input type="checkbox" name="Non-R&D-4" id="Non-R&D-4"><label for="Non-R&D-4">??????</label></li>
          <li><input type="checkbox" name="Non-R&D-5" id="Non-R&D-5"><label for="Non-R&D-5">????????????</label></li>
          <li><input type="checkbox" name="Non-R&D-6" id="Non-R&D-6"><label for="Non-R&D-6">????????????</label></li>
          <li><input type="checkbox" name="Non-R&D-7" id="Non-R&D-7"><label for="Non-R&D-7">????????????</label></li>
          <li><input type="checkbox" name="Non-R&D-8" id="Non-R&D-8"><label for="Non-R&D-8">??????</label></li>
          <li><input type="checkbox" name="Non-R&D-9" id="Non-R&D-9"><label for="Non-R&D-9">??????</label></li>
          <li><input type="checkbox" name="Non-R&D-10" id="Non-R&D-10"><label for="Non-R&D-10">??????</label></li>
          <li><input type="checkbox" name="Non-R&D-11" id="Non-R&D-11"><label for="Non-R&D-11">??????</label></li>
          <li><input type="checkbox" name="Non-R&D-12" id="Non-R&D-12"><label for="Non-R&D-12">??????</label></li>
        </ul>
        </li>
      </ul>
    </div>

    <div class="grid-item item3">
      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="Radio07">
      <label class="form-check-label" for="Radio07">
        <label for="?????????????????????????????????">????????????????????????:</label>
        <select name="????????????">
            <option value="0"> >= </option>
            <option value="1"> > </option>
            <option value="2"> = </option>
            <option value="3"> < </option>
            <option value="4"> <= </option>
        </select>
        <input type="text" name="????????????" value="" placeholder="????????????(??????)" autofocus style="width: 100px;"/>
      </label>
    </div>

    <div class="grid-item item4">
      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="Radio07">
      <label class="form-check-label" for="Radio08">
        <label for="?????????????????????????????????">????????????????????????:</label>
        <select name="????????????">
          <option value="0"> >= </option>
          <option value="1"> > </option>
          <option value="2"> = </option>
          <option value="3"> < </option>
          <option value="4"> <= </option>
        </select>
        <input type="text" name="????????????" value="" placeholder="????????????(??????)" autofocus style="width: 100px; content"/>
      </label>
    </div>

    <div class="grid-item item5">
      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="Radio08">
      <label class="form-check-label" for="Radio08">
        <label for="???????????????????????????">??????????????????:</label>
        <select id="cars" name="cars">
          <option value="?????????">???????????????</option>
          <option value="??????">?????????????????????(?????????)</option>
        </select>
      </label>
    </div>

    <div class="grid-item item6">
      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="Radio09">
      <label class="form-check-label" for="Radio09">
        <label for="?????????????????????????????????">????????????????????????:</label>
        <select id="cars" name="cars">
          <option value="?????????">????????????????????????</option>
          <option value="??????">?????????????????????</option>
        </select>
      </label>
    </div>
  </fieldset><br>

  <div style="text-align: center;">
    <button type="submit" class="btn btn-primary">??? ??? ??? ???</button>
  </div>

  </form>
</div>
