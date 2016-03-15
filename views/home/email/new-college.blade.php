<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 9 - 26 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
    <style>
        * {
            font-family: sans-serif !important;
        }
    </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset -->
    <style type="text/css">

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            Margin: 0 !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            Margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: Overrides styles added when Yahoo's auto-senses a link. */
        .yshortcuts a {
            border-bottom: none !important;
        }

        /* What it does: A work-around for iOS meddling in triggered links. */
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color:inherit !important;
            text-decoration: underline !important;
        }

    </style>

    <!-- Progressive Enhancements -->
    <style>

        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 480px) {

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid,
            .fluid-centered {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                Margin-left: auto !important;
                Margin-right: auto !important;
            }
            /* And center justify these ones. */
            .fluid-centered {
                Margin-left: auto !important;
                Margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }

            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                Margin-left: auto !important;
                Margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }

        }

    </style>

</head>
<body width="100%" bgcolor="#222222" style="Margin: 0;">
<table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="#222222" style="border-collapse:collapse;"><tr><td valign="top">
            <center style="width: 100%;">

                <!-- Visually Hidden Preheader Text : BEGIN -->
                <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">
                    (Optional) This text will appear in the inbox preview, but not the email body.
                </div>
                <!-- Visually Hidden Preheader Text : END -->

                <!--
                    Set the email width. Defined in two places:
                    1. max-width for all clients set with Outlook, allowing the email to squish on narrow but never go wider than 600px.
                    2. MSO tags for Desktop Windows Outlook enforce a 600px width.
                -->
                <div style="max-width: 680px;">
                    <!--[if (gte mso 9)|(IE)]>
                    <table cellspacing="0" cellpadding="0" border="0" width="680" align="center">
                        <tr>
                            <td>
                    <![endif]-->

                    <!-- Email Header : BEGIN -->
                    <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">
                        <tr>
                            <td style="padding: 20px 0; text-align: center">
                                <img src="http://placehold.it/200x50" width="200" height="50" alt="alt_text" border="0">
                            </td>
                        </tr>
                    </table>
                    <!-- Email Header : END -->

                    <!-- Email Body : BEGIN -->
                    <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="100%" style="max-width: 680px;">

                        <!-- Hero Image, Flush : BEGIN -->
                        <tr>
                            <td>
                                <img src="http://placehold.it/680x300" width="680" height="" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 680px;">
                            </td>
                        </tr>
                        <!-- Hero Image, Flush : END -->

                        <!-- 1 Column Text + Button : BEGIN -->
                        <tr>
                            <td>
                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
                                            Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.
                                            <br><br>
                                            <!-- Button : Begin -->
                                            <table cellspacing="0" cellpadding="0" border="0" align="center" style="Margin: auto">
                                                <tr>
                                                    <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td">
                                                        <a href="http://www.google.com" style="background: #222222; border: 15px solid #222222; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
                                                            <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->A Button<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- Button : END -->
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- 1 Column Text + Button : BEGIN -->

                        <!-- Background Image with Text : BEGIN -->
                        <tr>
                            <!-- Bulletproof Background Images c/o https://backgrounds.cm -->
                            <td background="http://placehold.it/680x230/222222/666666" bgcolor="#222222" valign="middle" style="text-align: center; background-position: center center !important; background-size: cover !important;">
                                <!--[if gte mso 9]>
                                <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:680px;height:175px; background-position: center center !important;">
                                    <v:fill type="tile" src="http://placehold.it/680x230/222222/666666" color="#222222" />
                                    <v:textbox inset="0,0,0,0">
                                <![endif]-->
                                <div>
                                    <!--[if mso]>
                                    <table border="0" cellspacing="0" cellpadding="0" align="center" width="500">
                                        <tr>
                                            <td align="center" valign="top" width="500">
                                    <![endif]-->
                                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:500px; Margin: auto;">
                                        <tr>
                                            <td valign="middle" style="text-align: center; padding: 40px 20px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #ffffff;">
                                                Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut&nbsp;erat.
                                            </td>
                                        </tr>
                                    </table>
                                    <!--[if (gte mso 9)|(IE)]>
                                    </td>
                                    </tr>
                                    </table>
                                    <![endif]-->
                                </div>
                                <!--[if gte mso 9]>
                                </v:textbox>
                                </v:rect>
                                <![endif]-->
                            </td>
                        </tr>
                        <!-- Background Image with Text : END -->

                        <!-- 2 Even Columns : BEGIN -->
                        <tr>
                            <td bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%">
                                <!--[if mso]>
                                <table border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                        <td align="center" valign="top" width="660">
                                <![endif]-->
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
                                    <tr>
                                        <td align="center" valign="top" style="font-size:0; padding: 10px 0;">
                                            <!--[if mso]>
                                            <table border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                                <tr>
                                                    <td align="left" valign="top" width="330">
                                            <![endif]-->
                                            <div style="display:inline-block; Margin: 0 -2px; width:100%; min-width:200px; max-width:330px; vertical-align:top;" class="stack-column">
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td style="padding: 10px 10px;">
                                                            <table cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px;text-align: left;">
                                                                <tr>
                                                                    <td>
                                                                        <img src="http://placehold.it/310" width="310" alt="" style="border: 0;width: 100%;max-width: 310px;" class="center-on-narrow">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">
                                                                        Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--[if mso]>
                                            </td>
                                            <td align="left" valign="top" width="330">
                                            <![endif]-->
                                            <div style="display:inline-block; Margin: 0 -2px; width:100%; min-width:200px; max-width:330px; vertical-align:top;" class="stack-column">
                                                <table width="100%">
                                                    <tr>
                                                        <td style="padding: 10px 10px;">
                                                            <table cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px;text-align: left;">
                                                                <tr>
                                                                    <td>
                                                                        <img src="http://placehold.it/310" width="310" alt="" style="border: 0;width: 100%;max-width: 310px;" class="center-on-narrow">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">
                                                                        Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--[if mso]>
                                            </td>
                                            </tr>
                                            </table>
                                            <![endif]-->
                                        </td>
                                    </tr>
                                </table>
                                <!--[if mso]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                        <!-- 2 Even Columns : END -->

                        <!-- 3 Even Columns : BEGIN -->
                        <tr>
                            <td bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%" style="padding: 10px 0;">
                                <!--[if mso]>
                                <table border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                        <td align="center" valign="top" width="660">
                                <![endif]-->
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
                                    <tr>
                                        <td align="center" valign="top" style="font-size:0;">
                                            <!--[if mso]>
                                            <table border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                                <tr>
                                                    <td align="left" valign="top" width="220">
                                            <![endif]-->
                                            <div style="display:inline-block; Margin: 0 -2px; max-width:33.33%; min-width:220px; vertical-align:top; width:100%;" class="stack-column">
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td style="padding: 10px 10px;">
                                                            <table cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px;text-align: left;">
                                                                <tr>
                                                                    <td>
                                                                        <img src="http://placehold.it/200" width="200" alt="" style="border: 0;width: 100%;max-width: 200px;" class="center-on-narrow">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">
                                                                        Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--[if mso]>
                                            </td>
                                            <td align="left" valign="top" width="220">
                                            <![endif]-->
                                            <div style="display:inline-block; Margin: 0 -2px; max-width:33.33%; min-width:220px; vertical-align:top; width:100%;" class="stack-column">
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td style="padding: 10px 10px;">
                                                            <table cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px;text-align: left;">
                                                                <tr>
                                                                    <td>
                                                                        <img src="http://placehold.it/200" width="200" alt="" style="border: 0;width: 100%;max-width: 200px;" class="center-on-narrow">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">
                                                                        Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--[if mso]>
                                            </td>
                                            <td align="left" valign="top" width="220">
                                            <![endif]-->
                                            <div style="display:inline-block; Margin: 0 -2px; max-width:33.33%; min-width:220px; vertical-align:top; width:100%;" class="stack-column">
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td style="padding: 10px 10px;">
                                                            <table cellspacing="0" cellpadding="0" border="0" width="100%" style="font-size: 14px;text-align: left;">
                                                                <tr>
                                                                    <td>
                                                                        <img src="http://placehold.it/200" width="200" alt="" style="border: 0;width: 100%;max-width: 200px;" class="center-on-narrow">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding-top: 10px;" class="stack-column-center">
                                                                        Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--[if mso]>
                                            </td>
                                            </tr>
                                            </table>
                                            <![endif]-->
                                        </td>
                                    </tr>
                                </table>
                                <!--[if mso]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                        <!-- 3 Even Columns : END -->

                        <!-- Thumbnail Left, Text Right : BEGIN -->
                        <tr>
                            <td dir="ltr" bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%" style="padding: 10px 0;">
                                <!--[if mso]>
                                <table border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                        <td align="center" valign="top" width="660">
                                <![endif]-->
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
                                    <tr>
                                        <td align="center" valign="top" style="font-size:0; padding: 10px 0;">
                                            <!--[if mso]>
                                            <table border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                                <tr>
                                                    <td align="left" valign="top" width="220">
                                            <![endif]-->
                                            <div style="display:inline-block; Margin: 0 -2px; max-width: 200px; min-width:160px; vertical-align:top; width:100%;" class="stack-column">
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td dir="ltr" style="padding: 0 10px 10px 10px;">
                                                            <img src="http://placehold.it/200" width="200" alt="" style="border: 0;width: 100%;max-width: 200px;" class="center-on-narrow">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--[if mso]>
                                            </td>
                                            <td align="left" valign="top" width="440">
                                            <![endif]-->
                                            <div style="display:inline-block; Margin: 0 -2px; max-width:66.66%; min-width:320px; vertical-align:top;" class="stack-column">
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td dir="ltr" style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 10px 10px 0; text-align: left;" class="center-on-narrow">
                                                            <strong style="color:#111111;">Class aptent taciti sociosqu</strong>
                                                            <br><br>
                                                            Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                                            <br><br>
                                                            <!-- Button : Begin -->
                                                            <table cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" style="float:left;">
                                                                <tr>
                                                                    <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td">
                                                                        <a href="http://www.google.com" style="background: #222222; border: 15px solid #222222; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
                                                                            <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->A Button<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- Button : END -->
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--[if mso]>
                                            </td>
                                            </tr>
                                            </table>
                                            <![endif]-->
                                        </td>
                                    </tr>
                                </table>
                                <!--[if mso]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                        <!-- Thumbnail Left, Text Right : END -->

                        <!-- Thumbnail Right, Text Left : BEGIN -->
                        <tr>
                            <td dir="rtl" bgcolor="#ffffff" align="center" height="100%" valign="top" width="100%" style="padding: 10px 0;">
                                <!--[if mso]>
                                <table border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                    <tr>
                                        <td align="center" valign="top" width="660">
                                <![endif]-->
                                <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
                                    <tr>
                                        <td align="center" valign="top" style="font-size:0; padding: 10px 0;">
                                            <!--[if mso]>
                                            <table border="0" cellspacing="0" cellpadding="0" align="center" width="660">
                                                <tr>
                                                    <td align="left" valign="top" width="220">
                                            <![endif]-->
                                            <div style="display:inline-block; Margin: 0 -2px; max-width: 200px; min-width:160px; vertical-align:top; width:100%;" class="stack-column">
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td dir="ltr" style="padding: 0 10px 10px 10px;">
                                                            <img src="http://placehold.it/200" width="200" alt="" style="border: 0;width: 100%;max-width: 200px;" class="center-on-narrow">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--[if mso]>
                                            </td>
                                            <td align="left" valign="top" width="440">
                                            <![endif]-->
                                            <div style="display:inline-block; Margin: 0 -2px; max-width:66.66%; min-width:320px; vertical-align:top;" class="stack-column">
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td dir="ltr" style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 10px 10px 0; text-align: left;" class="center-on-narrow">
                                                            <strong style="color:#111111;">Class aptent taciti sociosqu</strong>
                                                            <br><br>
                                                            Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                                            <br><br>
                                                            <!-- Button : Begin -->
                                                            <table cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" style="float:left;">
                                                                <tr>
                                                                    <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td">
                                                                        <a href="http://www.google.com" style="background: #222222; border: 15px solid #222222; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
                                                                            <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->A Button<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- Button : END -->
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--[if mso]>
                                            </td>
                                            </tr>
                                            </table>
                                            <![endif]-->
                                        </td>
                                    </tr>
                                </table>
                                <!--[if mso]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                        <!-- Thumbnail Right, Text Left : END -->

                    </table>
                    <!-- Email Body : END -->

                    <!-- Email Footer : BEGIN -->
                    <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">
                        <tr>
                            <td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;">
                                <webversion style="color:#cccccc; text-decoration:underline; font-weight: bold;">View as a Web Page</webversion>
                                <br><br>
                                Company Name<br><span class="mobile-link--footer">123 Fake Street, SpringField, OR, 97477 US</span><br><span class="mobile-link--footer">(123) 456-7890</span>
                                <br><br>
                                <unsubscribe style="color:#888888; text-decoration:underline;">unsubscribe</unsubscribe>
                            </td>
                        </tr>
                    </table>
                    <!-- Email Footer : END -->

                    <!--[if (gte mso 9)|(IE)]>
                    </td>
                    </tr>
                    </table>
                    <![endif]-->
                </div>
            </center>
        </td></tr></table>
</body>
</html>

