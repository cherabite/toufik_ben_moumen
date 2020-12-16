<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>تسجيل السيرة الذاتية للموظف</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link href="<?php echo base_url();?>assets/css/material-fullpalette.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
    <link href='https://fonts.googleapis.com/css?family=Tajawal' rel='stylesheet'>
    <style>
    body {
        direction: rtl;
        font-family: 'Tajawal';
    }
    </style>

</head>

<body>

    <div class="container">
        <div class="jumbotron">
            <legend>
                <ol class="breadcrumb">
                    إستمارة تسجيل السيرة الذاتية للموظف
                </ol>
        </div>
        </legend>
        <form method="POST" action="" id="frm_submit">

            <div class="jumbotron">


                <div class="row">

                    <div class="wrapper wrapper-content animated fadeInRight">

                        <div class="ibox ">

                            <div class="ibox-title">



                                <div class="ibox-tools">

                                </div>

                            </div>

                            <!-- ............................................................. -->

                            <!-- BO : content  -->

                            <div class="col-sm-12 white-bg ">

                                <div class="box box-info">

                                    <div class="box-header with-border">

                                        <h3 class="box-title"> </h3>

                                    </div>

                                    <!-- /.box-header -->

                                    <!-- form start -->













                                    <!-- Nom Start -->

                                    <div class="form-group">

                                        <label for="nom" class="col-sm-3 control-label"> اللقب </label>

                                        <div class="col-sm-4">

                                            <input type="text" class="form-control" id="nom" name="nom"
                                                value="<?php echo set_value("nom"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("nom","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Nom End -->











                                    <!-- Prenom Start -->

                                    <div class="form-group">

                                        <label for="prenom" class="col-sm-3 control-label"> الإسم </label>

                                        <div class="col-sm-4">

                                            <input type="text" class="form-control" id="prenom" name="prenom"
                                                value="<?php echo set_value("prenom"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("prenom","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Prenom End -->











                                    <!-- Wilaya_n Start -->

                                    <div class="form-group">

                                        <label for="wilaya_n" class="col-sm-3 control-label"> ولاية الميلاد </label>

                                        <div class="col-sm-4">

                                            <select class="form-control select2" name="wilaya_n" id="wilaya_n">

                                                <option value="">إختر ولاية الميلاد</option>


                                                <option value="01">

                                                    أدرار
                                                </option>


                                                <option value="02">

                                                    الشلف
                                                </option>


                                                <option value="03">

                                                    الأغواط
                                                </option>


                                                <option value="04">

                                                    أم البواقي
                                                </option>


                                                <option value="05">

                                                    باتنة
                                                </option>


                                                <option value="06">

                                                    بجاية
                                                </option>


                                                <option value="07">

                                                    بسكرة
                                                </option>


                                                <option value="08">

                                                    بشار
                                                </option>


                                                <option value="09">

                                                    البليدة
                                                </option>


                                                <option value="10">

                                                    البويرة
                                                </option>


                                                <option value="11">

                                                    تمنراست
                                                </option>


                                                <option value="12">

                                                    تبسة
                                                </option>


                                                <option value="13">

                                                    تلمسان
                                                </option>


                                                <option value="14">

                                                    تيارت
                                                </option>


                                                <option value="15">

                                                    تيزي وزو
                                                </option>


                                                <option value="16">

                                                    الجزائر
                                                </option>


                                                <option value="17">

                                                    الجلفة
                                                </option>


                                                <option value="18">

                                                    جيجل
                                                </option>


                                                <option value="19">

                                                    سطيف
                                                </option>


                                                <option value="20">

                                                    سعيدة
                                                </option>


                                                <option value="21">

                                                    سكيكدة
                                                </option>


                                                <option value="22">

                                                    سيدي بلعباس
                                                </option>


                                                <option value="23">

                                                    عنابة
                                                </option>


                                                <option value="24">

                                                    قالمة
                                                </option>


                                                <option value="25">

                                                    قسنطينة
                                                </option>


                                                <option value="26">

                                                    المدية
                                                </option>


                                                <option value="27">

                                                    مستغانم
                                                </option>


                                                <option value="28">

                                                    المسيلة
                                                </option>


                                                <option value="29">

                                                    معسكر
                                                </option>


                                                <option value="30">

                                                    ورقلة
                                                </option>


                                                <option value="31">

                                                    وهران
                                                </option>


                                                <option value="32">

                                                    البيض
                                                </option>


                                                <option value="33">

                                                    إيليزي
                                                </option>


                                                <option value="34">

                                                    برج بوعريريج
                                                </option>


                                                <option value="35">

                                                    بومرداس
                                                </option>


                                                <option value="36">

                                                    الطارف
                                                </option>


                                                <option value="37">

                                                    تندوف
                                                </option>


                                                <option value="38">

                                                    تيسمسيلت
                                                </option>


                                                <option value="39">

                                                    الوادي
                                                </option>


                                                <option value="40">

                                                    خنشلة
                                                </option>


                                                <option value="41">

                                                    سوق أهراس
                                                </option>


                                                <option value="42">

                                                    تيبازة
                                                </option>


                                                <option value="43">

                                                    ميلة
                                                </option>


                                                <option value="44">

                                                    عين الدفلى
                                                </option>


                                                <option value="45">

                                                    النعامة
                                                </option>


                                                <option value="46">

                                                    عين تيموشنت
                                                </option>


                                                <option value="47">

                                                    غرداية
                                                </option>


                                                <option value="48">

                                                    غليزان
                                                </option>



                                            </select>






                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("wilaya_n","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Wilaya_n End -->









                                    <!-- Sexe Start -->

                                    <div class="form-group">

                                        <label class="col-sm-3 control-label">الجنس</label>

                                        <div class="col-sm-4">

                                            <span style="margin-right:20px;"><input type="radio"
                                                    style="width:20px; height:20px;" name="sexe" value="ذكر"> ذكر
                                            </span>

                                            <span style="margin-right:20px;"><input type="radio"
                                                    style="width:20px; height:20px;" name="sexe" value="أنثى"> أنثى
                                            </span>

                                        </div>

                                    </div>

                                    <!-- Sexe End -->







                                    <!-- Situation_fa Start -->

                                    <div class="form-group">

                                        <label class="col-sm-3 control-label">الحالة العائلية</label>

                                        <div class="col-sm-4">

                                            <span style="margin-right:20px;"><input type="radio"
                                                    style="width:20px; height:20px;" name="situation_fa" value="متزوج">
                                                متزوج </span>

                                            <span style="margin-right:20px;"><input type="radio"
                                                    style="width:20px; height:20px;" name="situation_fa" value="أعزب">
                                                أعزب </span>

                                        </div>

                                    </div>

                                    <!-- Situation_fa End -->









                                    <!-- Nb_enfant Start -->

                                    <div class="form-group">

                                        <label for="nb_enfant" class="col-sm-3 control-label"> عدد الأولاد </label>

                                        <div class="col-sm-4">

                                            <input type="text" class="form-control" id="nb_enfant" name="nb_enfant"
                                                value="<?php echo set_value("nb_enfant"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("nb_enfant","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Nb_enfant End -->











                                    <!-- Adresse Start -->

                                    <div class="form-group">

                                        <label for="adresse" class="col-sm-3 control-label"> العنوان </label>

                                        <div class="col-sm-4">

                                            <input type="text" class="form-control" id="adresse" name="adresse"
                                                value="<?php echo set_value("adresse"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("adresse","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Adresse End -->











                                    <!-- Tel Start -->

                                    <div class="form-group">

                                        <label for="tel" class="col-sm-3 control-label"> الهاتف </label>

                                        <div class="col-sm-4">

                                            <input type="text" class="form-control" id="tel" name="tel"
                                                value="<?php echo set_value("tel"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("tel","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Tel End -->











                                    <!-- Email Start -->

                                    <div class="form-group">

                                        <label for="email" class="col-sm-3 control-label"> الايمايل </label>

                                        <div class="col-sm-4">

                                            <input type="text" class="form-control" id="email" name="email"
                                                value="<?php echo set_value("email"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("email","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Email End -->









                                    <!-- Image Start -->

                                    <div class="form-group">

                                        <label for="address" class="col-sm-3 control-label"> الصورة </label>

                                        <div class="col-sm-6">

                                            <input type="file" name="image" />

                                            <input type="hidden" name="old_image"
                                                value="<?php if (isset($image) && $image!=""){echo $image; } ?>" />

                                            <?php if(isset($image_err) && !empty($image_err)) 

                                               { foreach($image_err as $key => $error)

                                                { echo "<div class=\"error-msg\"></div>"; } }?>

                                        </div>

                                        <div class="col-sm-3">

                                        </div>

                                    </div>

                                    <!-- Image End -->









                                    <!-- Fonction_first Start -->

                                    <div class="form-group">

                                        <label for="fonction_first" class="col-sm-3 control-label"> أول وظيفة </label>

                                        <div class="col-sm-4">

                                            <input type="text" class="form-control" id="fonction_first"
                                                name="fonction_first"
                                                value="<?php echo set_value("fonction_first"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("fonction_first","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Fonction_first End -->











                                    <!-- Fonction_grade_first Start -->

                                    <div class="form-group">

                                        <label for="fonction_grade_first" class="col-sm-3 control-label"> تاريخ أول تعين
                                        </label>

                                        <div class="col-sm-4">

                                            <input type="date" class="form-control" id="fonction_grade_first"
                                                name="fonction_grade_first"
                                                value="<?php echo set_value("fonction_grade_first"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("fonction_grade_first","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Fonction_grade_first End -->











                                    <!-- Fonction_actuel Start -->

                                    <div class="form-group">

                                        <label for="fonction_actuel" class="col-sm-3 control-label"> الوظيفة الحالية
                                        </label>

                                        <div class="col-sm-4">

                                            <input type="text" class="form-control" id="fonction_actuel"
                                                name="fonction_actuel"
                                                value="<?php echo set_value("fonction_actuel"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("fonction_actuel","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Fonction_actuel End -->









                                    <!-- Date_fonction_actuel Start -->

                                    <div class="form-group">

                                        <label for="date_fonction_actuel" class="col-sm-3 control-label"> تاريخ الوظيفة
                                            الحالية </label>

                                        <div class="col-sm-4">

                                            <input type="text" class="form-control span2 datepicker"
                                                id="date_fonction_actuel" name="date_fonction_actuel"
                                                value="<?php echo set_value("date_fonction_actuel","2020-12-14"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("date_fonction_actuel","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Date_fonction_actuel End -->









                                    <!-- Grade Start -->

                                    <div class="form-group">

                                        <label for="grade" class="col-sm-3 control-label"> الدرجة </label>

                                        <div class="col-sm-4">

                                            <input type="number" class="form-control" id="grade" name="grade"
                                                value="<?php echo set_value("grade"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("grade","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Grade End -->









                                    <!-- Date_grade Start -->

                                    <div class="form-group">

                                        <label for="date_grade" class="col-sm-3 control-label"> تاريخ الدرجة </label>

                                        <div class="col-sm-4">

                                            <input type="date" class="form-control span2 datepicker" id="date_grade"
                                                name="date_grade"
                                                value="<?php echo set_value("date_grade","2020-12-14"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("date_grade","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Date_grade End -->









                                    <!-- Wilaya_fonction Start -->

                                    <div class="form-group">

                                        <label for="wilaya_fonction" class="col-sm-3 control-label"> ولاية العمل</label>

                                        <div class="col-sm-4">

                                            <select class="form-control select2" name="wilaya_fonction"
                                                id="wilaya_fonction">

                                                <option value="">إختر ولاية العمل</option>


                                                <option value="01">

                                                    أدرار
                                                </option>


                                                <option value="02">

                                                    الشلف
                                                </option>


                                                <option value="03">

                                                    الأغواط
                                                </option>


                                                <option value="04">

                                                    أم البواقي
                                                </option>


                                                <option value="05">

                                                    باتنة
                                                </option>


                                                <option value="06">

                                                    بجاية
                                                </option>


                                                <option value="07">

                                                    بسكرة
                                                </option>


                                                <option value="08">

                                                    بشار
                                                </option>


                                                <option value="09">

                                                    البليدة
                                                </option>


                                                <option value="10">

                                                    البويرة
                                                </option>


                                                <option value="11">

                                                    تمنراست
                                                </option>


                                                <option value="12">

                                                    تبسة
                                                </option>


                                                <option value="13">

                                                    تلمسان
                                                </option>


                                                <option value="14">

                                                    تيارت
                                                </option>


                                                <option value="15">

                                                    تيزي وزو
                                                </option>


                                                <option value="16">

                                                    الجزائر
                                                </option>


                                                <option value="17">

                                                    الجلفة
                                                </option>


                                                <option value="18">

                                                    جيجل
                                                </option>


                                                <option value="19">

                                                    سطيف
                                                </option>


                                                <option value="20">

                                                    سعيدة
                                                </option>


                                                <option value="21">

                                                    سكيكدة
                                                </option>


                                                <option value="22">

                                                    سيدي بلعباس
                                                </option>


                                                <option value="23">

                                                    عنابة
                                                </option>


                                                <option value="24">

                                                    قالمة
                                                </option>


                                                <option value="25">

                                                    قسنطينة
                                                </option>


                                                <option value="26">

                                                    المدية
                                                </option>


                                                <option value="27">

                                                    مستغانم
                                                </option>


                                                <option value="28">

                                                    المسيلة
                                                </option>


                                                <option value="29">

                                                    معسكر
                                                </option>


                                                <option value="30">

                                                    ورقلة
                                                </option>


                                                <option value="31">

                                                    وهران
                                                </option>


                                                <option value="32">

                                                    البيض
                                                </option>


                                                <option value="33">

                                                    إيليزي
                                                </option>


                                                <option value="34">

                                                    برج بوعريريج
                                                </option>


                                                <option value="35">

                                                    بومرداس
                                                </option>


                                                <option value="36">

                                                    الطارف
                                                </option>


                                                <option value="37">

                                                    تندوف
                                                </option>


                                                <option value="38">

                                                    تيسمسيلت
                                                </option>


                                                <option value="39">

                                                    الوادي
                                                </option>


                                                <option value="40">

                                                    خنشلة
                                                </option>


                                                <option value="41">

                                                    سوق أهراس
                                                </option>


                                                <option value="42">

                                                    تيبازة
                                                </option>


                                                <option value="43">

                                                    ميلة
                                                </option>


                                                <option value="44">

                                                    عين الدفلى
                                                </option>


                                                <option value="45">

                                                    النعامة
                                                </option>


                                                <option value="46">

                                                    عين تيموشنت
                                                </option>


                                                <option value="47">

                                                    غرداية
                                                </option>


                                                <option value="48">

                                                    غليزان
                                                </option>



                                            </select>

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("wilaya_fonction","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Wilaya_fonction End -->











                                    <!-- Etablissement Start -->

                                    <div class="form-group">

                                        <label for="etablissement" class="col-sm-3 control-label"> مؤسسة العمل </label>

                                        <div class="col-sm-4">

                                            <input type="text" class="form-control" id="etablissement"
                                                name="etablissement" value="<?php echo set_value("etablissement"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("etablissement","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Etablissement End -->











                                    <!-- Num_emp Start -->

                                    <div class="form-group">

                                        <label for="num_emp" class="col-sm-3 control-label"> رقم الموظف </label>

                                        <div class="col-sm-4">

                                            <input type="number" class="form-control" id="num_emp" name="num_emp"
                                                value="<?php echo set_value("num_emp"); ?>">

                                        </div>

                                        <div class="col-sm-5">



                                            <?php echo form_error("num_emp","<span class='label label-danger'>","</span>")?>

                                        </div>

                                    </div>

                                    <!-- Num_emp End -->







                                    <div class="form-group">

                                        <div class="col-sm-3">

                                        </div>

                                        <div class="col-sm-6">

                                            <button type="reset" class="btn btn-default ">Reset</button>

                                            <button type="submit" class="btn btn-info ">Submit</button>

                                        </div>

                                        <div class="col-sm-3">

                                        </div>

                                    </div>



                                    <!-- /.box-body -->

                                    <div class="box-footer">

                                    </div>

                                    <!-- /.box-footer -->



                                </div>

                                <!-- /.box -->

                                <br><br><br><br>

                            </div>

                            <!-- EO : content  -->

                            <!-- ...................................................................... -->

                        </div>

                    </div>

                </div>

            </div>

            <div class="row jumbotron">

                <div class="col-md-12">

                    <fieldset>
                        <legend>الشهادات والمؤهلات</legend>

                        <!-- Text input-->
                        <table style="width: 100%" class="table">
                            <thead>
                                <tr>
                                    <th>رقم</th>
                                    <th>من</th>
                                    <th>إلى</th>
                                    <th>لشهادة</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Ticket No.</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody id="table-details">
                                <tr id="row1" class="jdr1">
                                    <td><span class="btn btn-sm btn-default">1</span><input type="hidden" value="6437"
                                            name="count[]"></td>
                                    <td><input type="text" required="" class="form-control input-sm datepicker"
                                            placeholder="تاريخ بداية" name="jdate[]"></td>
                                    <td><input type="text" required="" class="form-control input-sm"
                                            placeholder="Travel by" name="jtype[]"></td>
                                    <td><input type="text" required="" data-parsley-type="number"
                                            class="form-control input-sm" placeholder="Paasenger count"
                                            name="jpassanger[]"></td>
                                    <td><input type="text" required="" class="form-control input-sm"
                                            placeholder="Depart from" name="jfrom[]"></td>
                                    <td><input type="text" required="" class="form-control input-sm"
                                            placeholder="Destination" name="jto[]"></td>
                                    <td><input type="text" required="" class="form-control input-sm"
                                            placeholder="Ticket No." name="jticket_no[]"></td>
                                    <td><input type="text" required="" data-parsley-type="digits"
                                            class="form-control input-sm" placeholder="Amount" name="jamount[]"></td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-primary btn-sm btn-add-more">إضافة</button>
                        <button class="btn btn-sm btn-warning btn-remove-detail-row">حذف</button>
                    </fieldset>

                </div>
                <div class="col-md-12">
                    <hr>
                    <input class="btn btn-success pull-right" type="submit" value="تسجيل" name="submit">
                    <input class="btn btn-danger" type="reset" value="إلغاء" name="cancel">
                </div>

            </div>
        </form>
        <div class="row">
            <div class="alert alert-dismissable alert-success" style="display: none">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Data inserted successfully</strong>.
            </div>

            <div class="alert alert-dismissable alert-danger" style="display: none">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Sorry something went wrong</strong>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
    <script>
    $(document).ready(function() {
        $("body").on('click', '.btn-add-more', function(e) {
            e.preventDefault();
            var $sr = ($(".jdr1").length + 1);
            var rowid = Math.random();




            var $html = '<tr class="jdr1" id="' + rowid + '">' +
                '<td><span class="btn btn-sm btn-default">' + $sr +
                '</span><input type="hidden" name="count[]" value="' + Math.floor((Math.random() *
                    10000) + 1) + '"></td>' +
                '<td><input type="text" name="jdate[]" placeholder="Date" class="form-control input-sm datepicker"></td>' +
                '<td><input type="text" name="jtype[]" placeholder="Travel by" class="form-control input-sm"></td>' +
                '<td><input type="text" name="jpassanger[]" placeholder="Paasenger count" class="form-control input-sm"></td>' +
                '<td><input type="text" name="jfrom[]" placeholder="Depart from" class="form-control input-sm"></td>' +
                '<td><input type="text" name="jto[]" placeholder="Destination" class="form-control input-sm"></td>' +
                '<td><input type="text" name="jticket_no[]" placeholder="Ticket No." class="form-control input-sm"></td>' +
                '<td><input type="text" name="jamount[]" placeholder="Amount" class="form-control input-sm"></td>' +
                '</tr>';
            $("#table-details").append($html);

        });
        $("body").on('click', '.btn-remove-detail-row', function(e) {
            e.preventDefault();
            if ($("#table-details tr:last-child").attr('id') != 'row1') {
                $("#table-details tr:last-child").remove();
            }

        });
        $("body").on('focus', ' .datepicker', function() {
            $(this).datepicker({
                dateFormat: "yy-mm-dd"
            });
        });

        $("#frm_submit").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?php echo base_url() ?>welcome/batchInsert',
                type: 'POST',
                data: $("#frm_submit").serialize()
            }).always(function(response) {
                var r = (response.trim());
                if (r == 1) {
                    $(".alert-success").show();
                } else {
                    $(".alert-danger").show();
                }
            });
        });
    });
    </script>
</body>

</html>