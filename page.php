<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link type="text/css" rel="stylesheet" href="http://localhost/mpdf_prac/stylepdf.css" />
    </head>

    <body>
        <?php 
        $file_content = file_get_contents("http://localhost/mpdf_prac/assessment-results.txt");
        $data = unserialize($file_content);
        ?>
    <htmlpageheader name="MyCoverHeader" style="display:none"></htmlpageheader>
    <htmlpageheader name="MyHeader" style="display:none">
        <img class="image-red-blue" style="height:14pt;" src="images/header-blue-red.png" />
        <div class="title-header" >
        prepared for: <?php echo $data->report->info->firstname . " " . $data->report->info->lastname;?></div>        
    </htmlpageheader>
    <htmlpagefooter name="MyFooter" style="display:none">
        <p><hr style="color:#00BBE8;width:100%;height:1pt;"></p>
        <table>
            <tr>
                <th width="600px" style="text-align: left;">
                    <p style="font-family:opensanscondensed;font-size:8pt;">
                    <?php echo $data->report->sections[0]->footer->copyright; ?>
                    </p>
                </th>
                <th>
                <div>
                    <img height="20px" width="20px" style="border-right:2px;margin-bottom:-5px;" src="images/footer-logo.png" />
                    <span style="margin-left:10px;display:inline-block;">| {PAGENO}</span>
                </div>
                </th>
            </tr>
        </table>
    </htmlpagefooter>
    <htmlpagefooter name="MyCoverFooter" style="display:none">
    </htmlpagefooter>
    
    <div class="pdfnoheader">
        <div clas="container-fluid">
            <img class="image-red-blue" src="images/header-blue-red.png" />
        </div>
        <div class="cover-container">
            <img class="image-cover" src="images/cover.png" />
            <h1>FIRST RESPONDERS</h1>
            <div class="cover-center-text">
                <h3>REPORT PREPARED FOR:</h3>
                <h2><?php echo $data->report->info->firstname . " " . $data->report->info->lastname;?>  | <?php echo explode(" ",$data->report->info->report_date)[0];?></h2>
            </div>
            <hr class="cover-hr">
            <img class="image-cover-footer" src="images/cover-footer.png" />
        </div>
    </div>
     
    <div class="body pdf-page">
        <p class="welcome">WELCOME</p>
        <p class="sub-heading">
            Congratulations on completing your OXYGEN Profile Assessment!
        </p>
        <p class="content-m10">
            We hope as you read about your unique personality style, you will be encouraged and empowered.
        </p>
        <p class="content-m10">
            This report is uniquely customized to you. The OXYGEN Profile assessment is an in-depth look at who
            you are, how you see the world, and how to best relate. It is designed to help you know yourself better
            and be better known by others. Get ready to be inspired by the insights and challenged by the
            opportunity to seek to understand each other on new levels!
        </p>
        <p class="content-m10">
            As you begin your Oxygen Profile Assessment experience:
        </p>
        <p class="content-m10">
            • If you are participating in a Wellness Block Training, please print out and bring along your report. 
            You will be discussing the information during the training and using it as a road map.
        </p>
        <p class="content-m10">
            • Prepare for a deep dive into your personality, strengths, and how you operate best at work and 
            at home. Keep an open mind and have some fun!
        </p>
        <p class="content-m10">
            • No assessment can ever exactly map who you are. The OXYGEN Profile assessment is very
            accurate but will never 100% highlight who you are. Take what resonates and run with it. 
            If something doesn't sound like you, no worries. Focus on what does and use it to strengthen 
            your relationship.
        </p>
        <p class="content-m10">
            Our First Responder Wellness Training is built around understanding how to lead from a place of
            strength and authenticity. The insights contained in this report will help you unlock the keys to better
            communication with others, a deeper understanding of what motivates you, how your natural style
            adapts when under stress, and how you deal with conflict when under fire.
        </p>
        <p class="content-m10">
            You are on the frontlines serving our country and community. We know that assignment is not always
            easy and hope this assessment can provide insight into how you lead and care for those that serve
            alongside you.
        </p>
        <p class="sub-heading">
            Cheering for you,
        </p>
        <p class="signature-name">
            Noel and Karissa Meado
        </p>
        <p class="sub-heading">
            CEO, Stronger Families and Co-Creator of OXYGEN Seminar
        </p>
        <img height="30%" src="images/image-ceo.png" />
    </div>
         
    <div class="body pdf-page">
        <p class="heading">
        OXYGEN COMPASS
        </p>
        <p class="content-m10">
            The OXYGEN Compass is a visual tool to help you see your natural strengths and unique personality. It 
            can also help you understand how your relationship with co-workers, family, and friends help meet 
            the demands of the current environment.
        </p>
        <p class="content-m10">
            Putting all the pieces together can give you a powerful picture of your relationship with others.
            It can drive objective discussion about what the natural strengths are and how each person
            feels they need to move, as a whole, to succeed in the current environment.
        </p>
        <p class="content-m10">
            Remember this is not designed to be absolute but to drive discussion.
        </p>
        <div class="oxygen-compass-img" style="background-image:url('images/compass-driven.png');">
            <img class="compass-star-driven"height="11pt" style="margin-top:0px;display:inline-block;" src="images/star.png" />
        </div>
        <p class="content-m11" style="text-align:right;">
                "Adapted" Style: <img height="11pt" style="margin-top:0px;display:inline-block;" src="images/star.png" />
        </p>
    </div>
         
    <div class="body pdf-page">
        <p class="heading">
        PERSONALITY INSIGHTS
        </p>
        <p class="content-mi10">
        When it comes to personality, there’s no right or wrong! You have both strengths and challenges. 
        Understanding your natural style of engagement with the world around you is key to best utilizing 
        your strengths and overcoming the challenges you face. Based on your responses, the statements 
        below reveal a broad understanding of your natural or “core” personality style.
        </p>
        <p class="content-m11">
            <?php echo join(",",$data->report->sections[4]->statements[0]->stmts);?>
        </p>
        <p class="content-m11">
            <?php echo join(",",$data->report->sections[4]->statements[1]->stmts);?>
        </p>
        <p class="content-m11">
        <?php echo join(",",$data->report->sections[4]->statements[1]->stmts);?>
        </p>
    </div>
         
    <div class="body pdf-page" >
        <p class="heading">
            PERSONALITY INSIGHT DETAILS
        </p>
        <p class="content-m11">
        The more you explore your personality, the deeper the insights become. This next section will zoom in 
        on how your personality impacts your response to four areas of life you experience day-to-day
        </p>
        <!-- <table style="background-color: #ececec;display:none;">
            <tr>
                <td style="width: 25%;padding:0;">
                    <img width="200px" height="120px" src="images/graph-blue.png">
                </td>
                <td style="width: 75%;">
                    <table>
                        <tr>
                            <td style="padding-left:15%;padding-right:15%;width:50%;"><span>REFLECTIVE</span></td><td style="padding-left:15%;padding-right:15%;width:50%;"><span>AGGRESSIVE</span></td>
                        </tr>
                        <tr>
                            <td colspan=2 style="background-color:#BFC3C4;height:20%;padding:2px;">
                            <table style="width:100%;">
                                <tr>
                                    <td style="text-align:right;">
                                    <div style="background-color:#00BBE8;padding-left:100px;"><p style="color:white;">10</p></div>
                                    </td>
                                    <td style="width:50%;">
                                    <div >
                                        <p style="color:#BFC3C4">-</p>
                                    </div>
                                    </td>
                                </tr>
                            </table>
                                
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left:10%;padding-right:10%;">
                            <span style="font-size:8pt;">Patient while weighing pros and cons“Let’s give it some time.”</span>
                            </td>
                            <td style="padding-left:10%;padding-right:10%;">
                            <span style="font-size:8pt;"> quick decisions and immediate results“Let’s do it now.”</span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table> -->
        <div class="personality-insights-graph personality-graph-decision">
            <div class="pi-sp-r-1"><span>10</span></div>
        </div>
        <div class="personality-insights-graph personality-graph-influencing">
            <div class="pi-sp-r-1"><span>10</span></div>
        </div>
        <div class="personality-insights-graph personality-graph-reacting">
            <div class="pi-sp-r-1"><span>10</span></div>
        </div>
        <div class="personality-insights-graph personality-graph-solving">
            <div class="pi-sp-r-1"><span>10</span></div>
        </div>
        <table class="personality-insight-table">
            <tr>
                <td >
                    <div class="personality-insight-box">
                        <img height="7%" style="padding-bottom:2%;" src="images/personality-insight-strength.png" />
                        <p class="sub-heading" style="color:#00bbe8;font-size:11pt;font-weight:300;font-family:opensanscondensed;letter-spacing:-0.1pt;" >STRENGTHS YOU BRING TO RELATIONSHIPS</p>
                        <br>
                        <ul style="font-size:9pt;font-family:opensanscondensed;font-weight:300;">
                        <li><span style="color: black;">Focus on results and shared goals.</span></li>
                        <li><span style="color:black;">Get right to the point – straight shooter.</span></li>
                        <li><span style="color:black;">Takes initiative without prodding.</span></li>
                        <li><span style="color:black;">Don’t sit on your hands – you get it done.</span></li>
                        <li><span style="color:black;">Perseveres when the going gets tough.</span></li>
                        <li><span style="color:black;">Think outside the box for solutions.</span></li>

                        </ul>
                    </div>
                </td>
                <td >
                    <div class="personality-insight-box">
                        <img height="7%" style="padding-bottom:2%;" src="images/personality-insight-values.png" />
                        <p class="sub-heading" style="color:#00bbe8;font-size:11pt;font-weight:300;font-family:opensanscondensed;letter-spacing:-0.1pt;" >VALUE TO THE TEAM</p>
                        <br>
                        <ul style="font-size:9pt;font-family:opensanscondensed;font-weight:300;">
                        <li><span style="color:black;">Ability to handle many activities.</span></li>
                        <li><span style="color:black;">Challenges the status quo.</span></li>
                        <li><span style="color:black;">Ability to change gears fast and often.</span></li>
                        <li><span style="color:black;">Challenge-oriented.</span></li>
                        <li><span style="color:black;">Sense of urgency.</span></li>
                        <li><span style="color:black;">Deadline conscious.</span></li>
                        <li><span style="color:black;">Competitive.</span></li>
                        </ul>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="body pdf-page">
        <p class="heading">
            <?php echo $data->report->sections[9]->header->titles[0];?>
        </p>
        <p class="content-mi10">
        <?php echo $data->report->sections[9]->header->text;?>
        </p>
        <p class="content-mb11" >  <?php echo $data->report->sections[9]->prefix;?></p>
        <ul class="content-list-m11">
            <?php 
                $motivatinglist = $data->report->sections[9]->statements[0]->stmts;
                foreach($motivatinglist as $mbullet){
                    echo '<li><span style="color:black;">'.$mbullet.'</span></li>';
                }
            ?>
        </ul>
    </div>

    <div class="body pdf-page">
      <p class="heading">
            <?php echo $data->report->sections[10]->header->titles[0];?>
        </p>
        <p class="content-mi10">
        <?php echo $data->report->sections[10]->header->text;?>
        </p>
        <p class="content-m10" style="color:#00BBE8;">  <?php echo $data->report->sections[10]->prefix;?></p>
        <ul class="content-list-m11">
            <?php 
                $leadinglist = $data->report->sections[10]->statements[0]->stmts;
                foreach($leadinglist as $lbullet){
                    echo '<li><span style="color:black;">'.$lbullet.'</span></li>';
                }
            ?>
        </ul>
    </div>

    <div class="body pdf-page">
        <p class="heading">
            <?php echo $data->report->sections[6]->header->titles[0];?>
        </p>
        <p class="content-mi10">
        <?php echo $data->report->sections[6]->header->text;?>
        </p>
        <p class="content-m10" style="color:#00BBE8;">  <?php echo $data->report->sections[6]->prefix;?></p>
        <ul class="content-list-m11">
            <?php 
                $motivatinglist = $data->report->sections[6]->statements[0]->stmts;
                foreach($motivatinglist as $mbullet){
                    echo '<li><span style="color:black;">'.$mbullet.'</span></li>';
                }
            ?>
        </ul>
    </div>

    <div class="body pdf-page">
        <p class="heading">
            <?php echo $data->report->sections[7]->header->titles[0];?>
        </p>
        <p class="content-mi10">
        <?php echo $data->report->sections[7]->header->text;?>
        </p>
        <p class="content-m10" style="color:#00BBE8;">  <?php echo $data->report->sections[7]->prefix;?></p>
        <ul class="content-list-m11">
            <?php 
                $dontlist = $data->report->sections[7]->statements[0]->stmts;
                foreach($dontlist as $dontbullet){
                    echo '<li><span style="color:black;">'.$dontbullet.'</span></li>';
                }
            ?>
        </ul>
    </div>
         
    <div class="body pdf-page">
        <p class="heading"><?php echo $data->report->sections[12]->header->titles[0];?></p>
        <p class="content-mi10">
        <?php echo $data->report->sections[12]->header->text;?>
        </p>
        <div style="width:95%;margin:auto;padding-top:50px;">
            <hr class="perception-hr"/>
            <p class="perception-sub-heading"><?php echo $data->report->sections[12]->wordlists[0]->title;?></p>
            <hr class="perception-hr"/>
            <p class="perception-mb11"><?php echo $data->report->sections[12]->wordlists[0]->prefix;?></p>
            <table class="perception-table">
                <tbody>
                <tr>
                    <td>
                        <ul>
                        <?php 
                            $perceptionlist = $data->report->sections[12]->wordlists[0]->words;
                            $midperceptionlist = sizeof($perceptionlist)/2;
                            for($index = 0; $index < $midperceptionlist; $index++){
                                echo '<li><span style="color:black;">'.$perceptionlist[$index].'</span></li>';
                            }
                        ?>  
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <?php
                                for($index = $midperceptionlist; $index < sizeof($perceptionlist); $index++){
                                    echo '<li><span style="color:black;">'.$perceptionlist[$index].'</span></li>';
                                }
                            ?>
                        </ul>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div style="width:95%;margin:auto;">
            <hr class="perception-hr"/>
            <p class="perception-sub-heading"><?php echo $data->report->sections[12]->wordlists[1]->title;?></p>
            <hr class="perception-hr"/>
            <p class="perception-mb11"><?php echo $data->report->sections[12]->wordlists[1]->prefix;?></p>
            <table class="perception-table">
                <tbody>
                <tr>
                    <td>
                        <ul>
                        <?php 
                            $perceptionlist = $data->report->sections[12]->wordlists[1]->words;
                            $midperceptionlist = sizeof($perceptionlist)/2;
                            for($index = 0; $index < $midperceptionlist; $index++){
                                echo '<li><span style="color:black;">'.$perceptionlist[$index].'</span></li>';
                            }
                        ?>  
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <?php
                                for($index = $midperceptionlist; $index < sizeof($perceptionlist); $index++){
                                    echo '<li><span style="color:black;">'.$perceptionlist[$index].'</span></li>';
                                }
                            ?>
                        </ul>
                    </td>
                </tr>
                </tbody>
            </table>
            <p class="perception-mb11"><?php echo $data->report->sections[12]->wordlists[2]->prefix;?></p>
            <table class="perception-table">
                <tbody>
                <tr>
                    <td>
                    <?php 
                            $perceptionlist = $data->report->sections[12]->wordlists[2]->words;
                            $midperceptionlist = sizeof($perceptionlist)/2;
                            for($index = 0; $index < $midperceptionlist; $index++){
                                echo '<li><span style="color:black;">'.$perceptionlist[$index].'</span></li>';
                            }
                        ?>  
                    </td>
                    <td>
                        <ul>
                            <?php
                                for($index = $midperceptionlist; $index < sizeof($perceptionlist); $index++){
                                    echo '<li><span style="color:black;">'.$perceptionlist[$index].'</span></li>';
                                }
                            ?>
                        </ul>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="body pdf-last-page">
        <p class="heading">
            <?php echo $data->report->sections[15]->header->titles[0];?>
        </p>
        <p class="content-mi10">
        <?php echo $data->report->sections[15]->header->text;?>
        </p>
        <ul class="content-list-m11" style="list-style-type:disc;">
            <?php 
                $adaptlist = $data->report->sections[15]->statements[0]->stmts;
                foreach($adaptlist as $adaptbullet){
                    echo '<li><span style="color:black;">'.$adaptbullet.'</span></li>';
                }
            ?>
        </ul>
    </div>
         
    <div class="pdfnoheader">
        <table class="last-table" style="font-family:opensanscondensed;">
            <tr  >
                <td class="column-text" colspan=2>
                <p style="font-size:30pt;color:#00BBE8;font-family:opensanscondensed;">RESOURCES</p>
                    <br>
                    <p class="last-page-subheading" style="padding-top: 30px;">WANT MORE FIRST RESPONDER RESOURCES?</p>
                    <br>
                    <p class="content-m11">
                    Check out our website where we’ve cultivated the 
                    best video, audio, and articles on communication. 
                    Head over to <span style="color:#00BBE8;font-weight:400;display:inline;">strongerfamilies.com/first-responder</span>
                    or scan the QR code to get started.
                    </p>
                    <br>
                </td>
                <td class="column-image">
                <div><img  style="margin-left:7%;" height="25%" src="images/qr-code.png" /></div>
                </td>
            </tr>
            <tr height="20px">
                <td colspan="3"><p><hr style="color:#00BBE8;width:100%;height:1pt;margin-top:30px;"></p></td>
            </tr>
            <tr  >
                <td class="column-image">
                <div><img  style="margin-left:7%;" height="25%" src="images/qr-code.png" /></div>
                </td>
                <td class="column-text" colspan=2>
                    <br>
                    <p class="last-page-subheading">FIRST RESPONDER WELLNESS BLOCK TRAININGS</p>
                    <br>
                    <p class="content-m11">
                        The application of the OXYGEN Profile Assessment is not just the 
                        report you are holding, but it is found in our 6-part curriculum 
                        series that covers the tools your department needs to boost morale. 
                        every peer support team should know. SF:FR currently has the 
                        following Block Training Courses:
                    </p>
                    <br>
                    <ul class="list-content-m11">
                        <li><span style="color:black;">Communication</span></li>
                        <li><span style="color:black;">Overcoming Conflict</span></li>
                        <li><span style="color:black;">Understanding Differences</span></li>
                        <li><span style="color:black;">Workplace Relational Styles</span></li>
                        <li><span style="color:black;">Managing Transitions</span></li>
                    </ul>
                    <br>
                    <p class="content-m11" style="display:inline;">
                        Want to bring the Wellness Block Training to your department? 
                        Go to <span style="color:#00BBE8;font-weight:400;display:inline;">strongerfamilies.com/first-responder</span> or scan the QR code.
                        <br>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="3"><p><hr style="color:#00BBE8;width:100%;height:1pt;margin-top:30px;"></p></td>
            </tr>
            <tr >
                <td class="column-text" colspan=2>
                    <br>
                    <p class="last-page-subheading">ATTEND OUR FIRST RESPONDER OXYGEN RETREAT</p>
                    <br>
                    <p class="content-m11">
                        If you’re seeking to improve and strengthen your relationship, this 
                        retreat is for you and your significant other. Our retreat covers 
                        common relationship challenges, such as:
                    </p>
                    <br>
                    <ul class="list-content-m11">
                        <li><span style="color:black;">Personality Differences</span></li>
                        <li><span style="color:black;">Communication</span></li>
                        <li><span style="color:black;">Conflict Resolution</span></li>
                        <li><span style="color:black;">Intimacy</span></li>
                        <li><span style="color:black;">Forgiveness</span></li>
                    </ul>
                    <br>
                    <p class="content-m11">
                    To learn more about the First Responder OXYGEN Retreat or to 
                    bring this to your community, please visit the link<span style="color:#00BBE8;font-weight:400;display:inline;">strongerfamilies.com/first-responder</span>
                    or scan the QR code.
                    <br>
                    </p>
                </td>
                <td class="column-image">
                <div><img  style="margin-left:7%;" height="25%" src="images/qr-code.png" /></div>
                </td>
            </tr>
            <tr>
                <td colspan="3"><p><hr style="color:white;width:100%;height:0pt;margin-top:0px;"></p></td>
            </tr>
            <tr style="padding-top:50px;">
                <td>
                <img width="30%" style="margin-top:12px;" src="images/cover-footer.png" />
                </td>
                <td colspan=2 style="text-align:right;">
                    <p class="last-footer-heading">StrongerFamilies.com</p>
                    <p class="last-footer-text">Copyright © 2021. Target Training International, Ltd. & Stronger Families. All rights reserved.</p>
                </td>
            </tr>
            
        </table>
    </div>

    </body>
</html>