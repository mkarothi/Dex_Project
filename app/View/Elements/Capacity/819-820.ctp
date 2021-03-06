<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="MSThemeCompatible" content="no"/>
<meta name="Copyright" content="Licensed Materials - Property of IBM; IBM Cognos Products: rsvp; (C) Copyright IBM Corp. 2005, 2011; US Government Users Restricted Rights - Use, duplication or disclosure restricted by GSA ADP Schedule Contract with IBM Corp.">
<meta name="GeneratorID" content="10.1.6235.627"/>
<style xmlns:rsext="xalan://com.cognos.reportserver.ext.RSExt" type="text/css"><!--@charset "UTF-8";

/*
    Licensed Materials - Property of IBM
    IBM Cognos Products: rstyles
    (C) Copyright IBM Corp. 2003, 2011
    US Government Users Restricted Rights - Use, duplication or disclosure restricted by GSA ADP Schedule Contract with IBM Corp.
*/

/*
    Copyright (C) 2008 Cognos ULC, an IBM Company. All rights reserved.
    Cognos (R) is a trademark of Cognos ULC, (formerly Cognos Incorporated).
*/

/* ======================================================
    Named styles:

    Page styles
    -----------
    pg  : page
    pb  : page body
    ph  : page header
    pf  : page footer

    Title styles
    ------------
    ta  : report title area (container of the report title text)
    tt  : report title text
    ts  : subtitle area
    ft  : filter subtitle area
    fi  : filter subtitle icon

    List styles
    -----------
    ls  : list table
    lt  : list column title cell
    lc  : list column body cell
    lm  : list column body measure cell
    lh  : list header cell
    lf  : list footer cell
    ih  : inner header cell
    if  : inner footer cell
    is  : inner sumnmary cell
    oh  : outer header cell
    of  : outer footer cell
    os  : outer sumnmary cell

    Section styles
    --------------
    sc  : section list
    sb  : section body
    sh  : section header cell
    sf  : section footer cell
    sg  : section summary cell
    sk  : section inner header cell
    so  : section inner footer cell
    sp  : section inner summary cell
    ss  : section summary text

    Crosstab styles
    ---------------
    xt  : crosstab table
    xm  : crosstab default measure label cell
    ml  : member label cell
    mv  : member value cell
    cl  : calculated member label cell
    cv  : calculated member value cell
    c2  : calculated member value cell
    sl  : subtotal (items) label cell
    sv  : subtotal (items) value cell
    hl  : subtotal (more + hidden) label cell
    hv  : subtotal (more + hidden) value cell
    nl  : subtotal (included) label cell
    nv  : subtotal (included) value cell
    xl  : subtotal (excluded) label cell
    xv  : subtotal (excluded) value cell
    il  : inner total (nested) label cell
    iv  : inner total (nested) value cell
    ol  : outer total (not nested) total label cell
    ov  : outer total (not nested) total value cell
    dm  : drillable member label text
    xs  : crosstab spacer

    Chart styles
    ------------
    ct  : chart title
    cb  : chart body
    cn  : chart note
    cs  : chart subtitle
    cf  : chart footer
    lx  : chart legend title
    lg  : chart legend
    at  : chart axis title
    al  : chart axis labels
    ch  : chart

    Prompt styles
    -------------
    pp  : prompt page
    hp  : prompt page header
    fp  : prompt page footer
    py  : prompt page body
    bp  : prompt button

    Repeater styles
    ---------------
    rt  : repeater table
    rc  : repeater table cell

    Other styles
    ------------
    dp  : default container padding
    hy  : hyperlink
    bt  : button
    fs  : field set
    tb  : table
    np  : no print (do not render element in printable output)

    Conditional styles
    ------------------

    pd_1 : Excellent
    pd_2 : Very good
    pd_3 : Average
    pd_4 : Below average
    pd_5 : Poor

    Prompt Control styles
    --------------------
    bpd : Prompt button (disabled)
    pa  : Prompt control tree box
    pc  : Prompt control label text
    pcl : Prompt control clock
    pd  : Prompt control calendar (day numbers)
    pdd : Prompt control calendar (day numbers, disabled)
    pds : Prompt control calendar (day numbers, selected)
    pdt : Prompt control date/time background
    pe  : Prompt control general text
    pi  : Prompt control hint text
    pl  : Prompt control hyperlink
    pm  : Prompt control calendar (months)
    pmd : Prompt control calendar (months, disabled)
    pms : Prompt control calendar (months, selected)
    pt  : Prompt control text box
    pv  : Prompt control value box
    pw  : Prompt control calendar (day names)

    Custom Content styles
    ------------------------------
    cca : table title
    ccb : table
    ccc : cell heading
    ccd : general cell data
    cce : Custom Content
    ccf : footer index
    ccg : footer text
    cch : heading text
    cci : image
    ccj : numeric cell data
    cck : table caption
    ccl : section heading div style
    ccm : RichTextSection css style if rendered as <table>
    ccn : table dividing line
    cco : last <tr> elemnt of <table>
    ccp : table inside "section heading div"
    ccq : first <tr> of <table>  "section heading div", to create a black line across page
    ccr : second <tr> of <table>  "section heading div", containing the table heading text
    ccs : first table of RichTextSection
    cct : RichTextSection css style if rendered as <div>
    ccu : footnote div
        
 ====================================================== */


/* Default Font for the Report */
/* --------------------------- */

.pg /* page */,
.pp /* prompt page */
{
    font-family: Arial, Tahoma, 'Arial Unicode MS', 'Andale WT', 'MS UI Gothic', Gulim, SimSun, PMingLiU, Raghu8, sans-serif;
}

.pg *,
.pp *
{
    -moz-box-sizing: border-box;
}

IMG
{
    -moz-box-sizing: content-box !important;
}

/*
A bug in IE prevents TABLE elements from properly inheriting text properties.
These properties include color, font-size, font-weight, font-style,
font-variant, text-decoration, text-transform, letter-spacing, and line-height.
All of the text properties of TABLE elements, except font-family, are inherited
from the BODY element otherwise setting these on the page would be enough.
 */
.pg /* page */,
.pp /* prompt page */,
.tb /* table */,
.rt /* repeaterTable */,
.sc /* section list */,
.ls /* list */,
.xt /* crosstab */
{
    color: #000000;
}
.pg /* page */,
.pp /* prompt page */,
.tb /* table */,
.rt /* repeaterTable */,
.sc /* section list */
{
    font-size: 10pt;
}

/* Page Styles */
/* ----------- */

.pg /* page */
{
    width: 100%;
    height: 100%;
}

.pb /* page body */
{
    height: 100%;
    vertical-align: top;
    padding: 3px 5px;
}

.ph /* page header */,
.pf /* page footer */
{
    vertical-align: top;
    padding: 3px 5px;
}

/* Title Styles */
/* ----------- */

.ta /*  report title area (container of the report title text) */
{
    font-size: 14pt;
    font-weight: bold;
    text-align: center;
    padding: 3px 5px;
    color: #222222;
}

.tt /* report title text */
{
    text-decoration: underline;
}


.ts /* subtitle area */
{
    font-size: 10pt;
    text-align: center;
    padding: 3px 5px;
    color: #444444;
}


.ft /* filter subtitle area */
{
    font-size: 8pt;
    color: #000000;
    padding: 3px 5px;
}


.fi /* filter subtitle icon */
{
    vertical-align: middle;
    margin-right: 4px;
    border: 0px;
}

/* List Styles */
/* ----------- */

.ls /* list */
{
    font-size: 8pt;
}

.lt /* list column title cell */
{
    text-align: center;
    vertical-align: top;
    padding: 4px 5px 4px 6px;
    
    background-image: url(../reportstyles/images/silver_grad.png);
    background-position: left top;
    background-repeat: repeat-x;
    background-color: #E7E5E5;
    color: #333333;
    border: 1px solid silver;
}

.lc /* list column body cell */
{
    vertical-align: top;
    padding: 4px 5px 4px 5px;
    
    color: #454545;
    border: 1pt solid #E2E2E2;
}

.lm /* list column body measure cell */
{
    vertical-align: top;
    padding: 4px 5px;
    text-align: right;
    
    background-position: left top;
    background-repeat: repeat-y;
    color: #454545;
    border: 1pt solid #E2E2E2;
}

.lh /* list header cell */,
.lf /* list footer cell */
{
    vertical-align: top;
    border: 1px solid #E2E2E2;
    padding: 4px 5px;
    color: #454545;
}

.ih /* inner header cell */,
.if /* inner footer cell */
{
    font-weight: bold;
    vertical-align: top;
    border: 1px solid #CCCCCC;
    padding: 4px 5px 4px 6px;
    
    color: #31455E;
    background-color: #BDDAF3;
    background-image: url(../reportstyles/images/light_blue_grad.png);
    background-position:left top;
    background-repeat: repeat-x;
}

.is /* inner summary cell */
{
    font-weight: bold;
    vertical-align: top;
    border: 1px solid #CCCCCC;
    padding: 4px 5px;
    text-align: right;
    
    color: #31455E;
    background-color: #BDDAF3;
    background-image: url(../reportstyles/images/light_blue_grad.png);
    background-position:left top;
    background-repeat: repeat-x;
}

.oh /* outer header cell */,
.of /* outer footer cell */
{
    font-weight: bold;
    vertical-align: top;
    border: 1px solid #CCCCCC;
    padding: 4px 5px;
    
    background-color: #5F91CB;
    background-image: url(../reportstyles/images/deep_blue_grad.png);
    background-position: left top;
    background-repeat: repeat-x;
    color: white;
}

.os /* outer sumnmary cell */
{
    font-weight: bold;
    vertical-align: top;
    border: 1px solid #CCCCCC;
    padding: 4px 5px;
    text-align: right;
    
    background-color: #5F91CB;
    background-image: url(../reportstyles/images/deep_blue_grad.png);
    background-position: left top;
    background-repeat: repeat-x;
    color: white;
}

/* Section Styles */
/* -------------- */

.sb /* section body */
{
    padding: 3px 5px;
}

.sh /* section header cell */,
.sk /* section inner header cell */
{
    font-size: 10pt;
    font-weight: bold;
    border-bottom: 1px solid #666666;
    padding: 4px 5px;
    padding-top: 8px;
    color: #555555;
}

.sf /* section footer cell */,
.sg /* section summary cell */,
.so /* section inner footer cell */,
.sp /* section inner summary cell */
{
    border-top: 1px solid #999999;
    color: #999999;
    padding: 3px 5px;
}

.ss /* section summary text */
{
    border-top: 1px solid #999999;
    font-weight: bold;
    padding: 3px 5px;
}

/* Crosstab Styles */
/* --------------- */

.xt /* crosstab */
{
    font-size: 8pt;
}

.xm /* crosstab default measure label cell */
{
    font-weight: bold;
    vertical-align: top;
    text-align: center;
    padding: 4px 5px 4px 6px;
    
    color: #444444;
    border: none;
}

.ml /* member label cell */
{
    vertical-align: top;
    padding: 4px 5px 4px 6px;
    
    background-image: url(../reportstyles/images/silver_grad.png);
    background-position: left top;
    background-repeat: repeat-x;
    background-color: #E7E5E5;
    color: #333333;
    border: 1px solid silver;
}

.mv /* member value cell */
{
    vertical-align: top;
    white-space: nowrap;
    padding: 4px 5px 4px 6px;
    text-align: right;
    
    color: #454545;
    border: 1px solid #EFEFEF;
}

.cl /* calculated member label cell */
{
    font-style: italic;
    vertical-align: top;
    padding: 4px 5px 4px 6px;
    
    background-image: url(../reportstyles/images/silver_grad.png);
    background-position: left top;
    background-repeat: repeat-x;
    background-color: #E7E5E5;
    color: #222222;
    border: 1px solid silver;
}

.cv /* calculated member value cell */
{
    font-style: italic;
    vertical-align: top;
    white-space: nowrap;
    border: 1px solid #E2E2E2;
    padding: 4px 5px 4px 6px;
    text-align: right;
}

.c2 /* calculated member value cell (no italics) */
{
    vertical-align: top;
    white-space: nowrap;
    border: 1px solid #E2E2E2;
    padding: 4px 5px 4px 6px;
    text-align: right;
}

.sl /* subtotal (items) label cell */
{
    font-style: italic;
    vertical-align: top;
    padding: 4px 5px 4px 6px;
    padding-left: 10px;
    
    background-image: url(../reportstyles/images/silver_grad.png);
    background-position: left top;
    background-repeat: repeat-x;
    background-color: #E7E5E5;
    color: #333333;
    border: 1px solid silver;
}

.sv /* subtotal (items) value cell */
{
    vertical-align: top;
    white-space: nowrap;
    background-color: #EFF3F7;
    color: #222222;
    border: 1px solid #E1E6EC;
    padding: 4px 5px;
    text-align: right;
}

.hl /* subtotal (more + hidden) label cell */
{
    font-style: italic;
    vertical-align: top;
    padding: 4px 5px 4px 6px;
    padding-left: 10px;
    
    background-image: url(../reportstyles/images/silver_grad.png);
    background-position: left top;
    background-repeat: repeat-x;
    background-color: #E7E5E5;
    color: #333333;
    border: 1px solid silver;
}

.hv /* subtotal (more + hidden) value cell */
{
    vertical-align: top;
    white-space: nowrap;
    background-color: #EFF3F7;
    border: 1px solid #E1E6EC;
    padding: 4px 5px;
    text-align: right;
    color: #222222;
}

.nl /* subtotal (included) label cell */
{
    font-weight: bold;
    vertical-align: top;
    border: 1px solid #608BB4;
    color: #31455E;
    padding: 4px 5px 4px 6px;
    
    background-color: #BDDAF3;
    background-image: url(../reportstyles/images/light_blue_grad.png);
    background-position: left top;
    background-repeat: repeat-x;
}

.nv /* subtotal (included) value cell */
{
    font-weight: bold;
    vertical-align: top;
    white-space: nowrap;
    background-color: #EFF3F7;
    border: 1px solid #E1E6EC;
    padding: 4px 5px;
    text-align: right;
    color: #222222;
}

.xl /* subtotal (excluded) label cell */
{
    font-style: italic;
    vertical-align: top;
    border: 1px solid #608BB4;
    color: #31455E;
    padding: 4px 5px 4px 6px;
    
    background-color: #BDDAF3;
    background-image: url(../reportstyles/images/light_blue_grad.png);
    background-position:left top;
    background-repeat: repeat-x;
}

.xv /* subtotal (excluded) value cell */
{
    vertical-align: top;
    white-space: nowrap;
    background-color: #EFF3F7;
    border: 1px solid #E1E6EC;
    padding: 3px 5px;
    text-align: right;
    color: #222222;
}

.il /* inner total (nested) label cell */
{
    font-weight: bold;
    vertical-align: top;
    border: 1px solid #93B1CD;
    
    color: #31455E;
    background-color: #BDDAF3;
    padding: 4px 5px 4px 6px;
    background-image: url(../reportstyles/images/light_blue_grad.png);
    background-position:left top;
    background-repeat: repeat-x;
}

.iv /* inner total (nested) value cell */
{
    font-weight: bold;
    vertical-align: top;
    white-space: nowrap;
    padding: 3px 5px;
    text-align: right;
    
    color: #222222;
    background-color: #EFF3F7;
    border: 1px solid #E1E6EC;
}

.ol /* outer total (not nested) total label cell */
{
    font-weight: bold;
    vertical-align: top;
    border: 1px solid #93B1CD;
    padding: 4px 5px 4px 6px;
    
    background-color: #5F91CB;
    background-image: url(../reportstyles/images/deep_blue_grad.png);
    background-position: left top;
    background-repeat: repeat-x;
    color: white;
}

.ov /* outer total (not nested) total value cell */
{
    font-weight: bold;
    vertical-align: top;
    white-space: nowrap;
    border: 1px solid #D5D5D5;
    padding: 4px 7px 4px 9px;
    text-align: right;
    
    background-color: #DEE6F2;
    color: #444444;
}

.dm /* drillable member label text */
{
    color: blue;
    text-decoration: underline;
    cursor: pointer;
    padding: 4px 5px;
    background-color: #ffffff;
}

.xs /* crosstab spacer */
{
    vertical-align: top;
    padding: 4px 5px 4px 6px;
    
    background-image: url(../reportstyles/images/silver_grad.png);
    background-position: left top;
    background-repeat: repeat-x;
    background-color: #E7E5E5;
    color: #333333;
    border: 1px solid silver;
}

/* Chart Styles */
/* ------------ */

.ct /* chart title */
{
    font-size: 12pt;
    text-align: center;
    font-weight: bold;
    padding: 4px 5px;
}

.cs /* chart subtitle */,
.cf /* chart footer */
{
    font-size: 10pt;
    text-align: center;
}

.lx /* chart legend title */
{
    font-weight: bold;
    padding: 4px 5px;
}

.lg /* chart legend */
{
    text-align: left;
    padding: 4px 5px;
}

.at /* chart axis title */
{
    font-weight: bold;
    text-align: center;
    padding: 4px 5px;
}

.al /* chart axis labels */
{
    padding: 4px 5px;
}

.ch /* chart */
{
    font-size: 8pt;
    padding: 5px;
}

/* Prompt Styles */
/* ----------- */

.pp /* prompt page */
{
    width: 100%;
    height: 100%;
    background-color: #f7f8f9;
}

.py /* prompt page body */
{
    height: 100%;
    vertical-align: top;
    padding: 3px 5px;
}

.hp /* prompt page header */
{
    vertical-align: top;
    padding: 3px 5px;
    color: #222222;
}

.fp /* prompt page footer */
{
    vertical-align: top;
    background-color: #dfeef8;
    border: 1px solid #b1d6f3;
    padding: 4px 5px;
    background-image: url(../reportstyles/images/prompt_footer_bg.gif);
    background-position: left top;
    background-repeat: repeat-x;
}


.bp /* prompt button */
{
    font-size: 90%;
    text-align: center;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 3px;
    padding-top: 2px;
    margin-right: 7px;
    background-color: #ffffff;
    color: #000000;
    font-weight: normal;
    border: 1px solid #92AFC2;
    background-image: url(../reportstyles/images/button_bg.gif);
    background-position: left bottom;
    background-repeat: repeat-x;
}

/* Repeater Styles */
/* --------------- */

.rc /* repeaterTableCell */
{
    vertical-align: top;
}

/* Other Styles */
/* ------------ */

.dp /* default container padding */
{
    padding: 3px 5px;
}

.hy /* hyperlink */
{
    color: blue;
    text-decoration: underline;
    cursor: pointer;
}

.bt /* button */
{
    font-size: 10pt;
    text-align: center;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 3px;
    padding-top: 2px;
    margin-right: 7px;
    background-color: #ffffff;
    color: #000000;
    font-weight: normal;
    border: 1px solid #92AFC2;
    background-image: url(../reportstyles/images/button_bg.gif);
    background-position: left bottom;
    background-repeat: repeat-x;
}

.fs /* field set */
{
    display: inline;
    text-align: left;
}
/*
    Firefox doesn't support display:inline on <fieldset>.
    The workaround is to use -moz-inline-block, which is ignored by IE as long as it's in a different block.
*/
.fs /* field set */
{
    display: -moz-inline-block;
}

@media print
{
    .np /* no print (do not render element in printable output) */
    {
        display: none;
    }
}

/*
    Using the language specific font list below can help to workaround the following rendering issues on Browsers:
    1. The Japanese Yen and Korean Won sign appears as the "backslash" when they are represented by the code point "U+005C".
    2. Browser fails to supply a reasonable fall-back font support based on the font list in the "generic fonts" section.

    Also, these font lists will be useful for rendering some of the Unified Han ideographs to the form and shape which is
    typographically preferred by different Asian writing scripts.
*/

/* For Japanese:
.pg,
.pp
{
    font-family: 'MS UI Gothic', Tahoma, arial, geneva, helvetica, sans-serif, 'Andale WT J';
}
*/

/* For Simplified Chinese:
.pg,
.pp
{
    font-family: SimSun, Tahoma, arial, geneva, helvetica, sans-serif, 'Andale WT';
}
*/

/* For Traditional Chinese:
.pg,
.pp
{
    font-family: PMingLiU, Tahoma, arial, geneva, helvetica, sans-serif, 'Andale WT';
}
*/

/* For Korean:
.pg,
.pp
{
    font-family: Gulim, Tahoma, arial, geneva, helvetica, sans-serif, 'Andale WT K';
}
*/

.lt /* list column title cell */,
.lc /* list column body cell */,
.lm /* list column body measure cell */,
.lh /* list header cell */,
.lf /* list footer cell */,
.ih /* inner header cell */,
.if /* inner footer cell */,
.is /* inner sumnmary cell */,
.oh /* outer header cell */,
.of /* outer footer cell */,
.os /* outer sumnmary cell */,
.xm /* crosstab default measure label cell */,
.ml /* member label cell */,
.mv /* member value cell */,
.cl /* calculated member label cell */,
.cv /* calculated member value cell */,
.c2 /* calculated member value cell */,
.sl /* subtotal (items) label cell */,
.sv /* subtotal (items) value cell */,
.hl /* subtotal (more + hidden) label cell */,
.hv /* subtotal (more + hidden) value cell */,
.nl /* subtotal (included) label cell */,
.nv /* subtotal (included) value cell */,
.xl /* subtotal (excluded) label cell */,
.xv /* subtotal (excluded) value cell */,
.il /* inner total (nested) label cell */,
.iv /* inner total (nested) value cell */,
.ol /* outer total (not nested) total label cell */,
.ov /* outer total (not nested) total value cell */,
.xs /* crosstab spacer */
{
    line-break: strict;
}

.bpd /* Prompt button (disabled) */
{
    font-size: 90%;
    text-align: center;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 3px;
    padding-top: 2px;
    margin-right: 7px;
    background-color: #ffffff;
    color: #cccccc;
    font-weight: normal;
    border: 1px solid #cccccc;
    background-image: url(../reportstyles/images/button_disabled_bg.gif);
    background-position: left bottom;
    background-repeat: repeat-x;
}

.bph /* Prompt button (hover) */
{
    font-size: 90%;
    text-align: center;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 3px;
    padding-top: 2px;
    margin-right: 7px;
    background-color: #ffffff;
    color: #000000;
    font-weight: normal;
    border: 1px solid #D4AD63;
    background-image: url(../reportstyles/images/button_hover_bg.gif);
    background-position: left bottom;
    background-repeat: repeat-x;
}

.pa /* Prompt control tree box */
{
    height: 400px;
    width: 300px;
    overflow: auto;
    border: 1px solid #5da5d2;
    padding: 5px;
    color: #333333;
    background-color: #FFFFFF;
}

.pc /* Prompt control label text */
{
    font-weight: bold;
    color: #336699;
}

.pcl /* Prompt control clock */
{
    padding: 0px;
    margin: 0px;
    border: none;
    border-bottom-width: 2px;
    border-bottom-color: #FFFFFF;
    border-bottom-style: solid;
    color: #333333;
}

.pd /* Prompt control calendar (day numbers) */
{
    color: #015890;
    text-decoration: none;
    text-align: center;
    font-size: 10pt;
    padding: 3px;
    cursor: pointer;
    font-weight: normal;
    background-color: #FFFFFF;
    border: 1px solid #FFFFFF;
}

.pdd /* Prompt control calendar (day numbers, disabled) */
{
    color: #999999;
    text-decoration: none;
    text-align: center;
    font-size: 10pt;
    padding: 3px;
    cursor: default;
    font-weight: normal;
    background-color: #FFFFFF;
    border: 1px solid #FFFFFF;
}

.pds /* Prompt control calendar (day numbers, selected) */
{
    color: #015890;
    text-decoration: none;
    text-align: center;
    font-size: 10pt;
    padding: 3px;
    cursor: pointer;
    
    font-weight: normal;
    background-image: url(../reportstyles/images/calendar_selection.png);
    background-position: left top;
    background-repeat: repeat-x;
    background-color: #f6daaf;
    border: 1px solid #eccf9e;
}

.pdt /* Prompt control date/time background */
{
    background-color: #edf3f7;
    border: 1px solid #81b2d1;
    margin: 5px;
    padding-top: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
}

.pe /* Prompt control general text */
{
    color: #333333;
}

.pi /* Prompt control hint text */
{
    font-size: 70%;
    color: #015890;
}

.pl /* Prompt control hyperlink */
{
    font-size: 70%;
    color: #0000FF;
    font-weight: normal;
}

.pm /* Prompt control calendar (months) */
{
    color: #015890;
    font-size: 8pt;
    text-decoration: none;
    margin-top: 3px;
    text-align: center;
    vertical-align: bottom;
    cursor: pointer;
    font-weight: normal;
    border: 1px solid #FFFFFF;
}

.pmd /* Prompt control calendar (months, disabled) */
{
    color: #999999;
    font-size: 8pt;
    text-decoration: none;
    margin-top: 3px;
    text-align: center;
    vertical-align: bottom;
    cursor: default;
    font-weight: normal;
    border: 1px solid #FFFFFF;
}

.pms /* Prompt control calendar (months, selected) */
{
    color: #015890;
    font-size: 8pt;
    margin-top: 3px;
    text-align: center;
    vertical-align: bottom;
    cursor: pointer;
    text-decoration: none;
    
    font-weight: normal;
    background-image: url(../reportstyles/images/calendar_selection.png);
    background-position: left top;
    background-repeat: repeat-x;
    background-color: #f6daaf;
    border: 1px solid #eccf9e;
}

.pt /* Prompt control text box */
{
    color: #333333;
}

.pv /* Prompt control value box */
{
    color: #333333;
}

.pw /* Prompt control calendar (day names) */
{
    font-size: 9pt;
    padding: 3px;
    text-decoration: none;
    text-align: center;
    
    background-image: url(../reportstyles/images/silver_grad.png);
    background-position: left top;
    background-repeat: repeat-x;
    background-color: #E7E5E5;
    color: #333333;
}

/* Conditional Styles */
/* --------------- */

.pd_1 /* Excellent */
{
    background-color: #009933;
    color: #FFFFFF;
}

.pd_2 /* Very good */
{
    background-color: #FFFFFF;
    color: #009933;
}

.pd_3 /* Average */
{
    background-color: #FFFFFF;
    color: #CC9900;
}

.pd_4 /* Below average */
{
    background-color: #FFFFFF;
    color: #990000;
}

.pd_5 /* Poor */
{
    background-color: #990000;
    color: #FFFFFF;
}

/*  Custom Content styles */
/* ------------------------------ */

.cca  /*table title */
{
    font-size: 12pt;
    font-weight: bold;
    margin-bottom: 6px;
    color: #000000;
    white-space: nowrap;
}

.ccb /* table ( other than first table of RichTextSection) */
{
    font-size: 8pt;
    margin-bottom: 4px;
    margin-top: 23px;
    border-collapse: collapse;
    empty-cells: show;
}

.ccc /*cell heading*/
{
    font-size: 8pt;
    font-style: normal;
    color: #333333;
    text-align: center;
    vertical-align: top;
    padding: 4px 5px 4px 6px;
    background-image: url(../reportstyles/images/silver_grad.png);
    background-position: left top;
    background-repeat: repeat-x;
    background-color: #E7E5E5;
    border: 1px solid silver;
    white-space: nowrap;
}

.ccd /*cell data*/
{
    font-size: 8pt;
    font-style: normal;
    color: #333333;
    vertical-align: top;
    padding: 4px 5px 4px 5px;
    background-color: #FFFFFF;
    border: 1px solid #E2E2E2;
}

.cce /* Custom Content */
{

}

.ccf /* footer index */
{
    font-size: 8pt;
    color: #AA0000;
    font-weight: bold;
    vertical-align: super;
}

.ccg /* footer text*/
{
    font-size: 8pt;
}

.cch /* header text */
{
    font-weight: bold;
}

.cci /* image */
{

}

.ccj /* numeric cell data*/
{
    text-align: right;
    font-style: normal;
    color: #454545;
    vertical-align: top;
    padding: 4px 5px;
    background-color: #FFFFFF;
    border: 1px solid #E2E2E2;
    white-space: nowrap;
}

.cck  /*table caption */
{
    text-align: left;
    white-space: nowrap;
    margin-bottom: 3px;
    color: #505050;
}

.ccl  /*section heading div style*/
{
    color: #000000;
}

.ccm /*RichTextSection css style if rendered as <table>*/
{
    padding: 4px 5px;
    color: #505050;
}

.ccn /* table dividing line -- hide in output to simplify output */
{
    background-color: Transparent;
    height: 1px;
}

.cco /* last <tr> elemnt of <table>*/
{
    background-color: #F4F4F4;
    padding: 4px 5px;
    color: #505050;
}

.ccp /* table inside "section heading div" */
{
    width: 100%;
    color: #000000;
}

.ccq /* first <tr> of <table>  "section heading div", to create a black line across page*/
{
    background-color: Transparent;
    height: 1px;
}

.ccr /* second <tr> of <table>  "section heading div", containing the table heading text*/
{
    font-size: 12pt;
    color: #000000;
    font-weight: bold;
}

.ccs /*first table of RichTextSection*/
{
    font-size: 8pt;
    border-collapse: collapse;
    empty-cells: show;
    border: 0px;
    color: #505050;
}

.cct /*RichTextSection css style if rendered as <div>*/
{
    color: #505050;
}

.ccu /* footnote div*/
{
    color: #000000;
    margin-bottom: 4px;
}

.ccv /* cell heading for warning table  -- embedded as div within ccc, so just override those values */
{
    text-align: left;
}
--></style><style xmlns:rsext="xalan://com.cognos.reportserver.ext.RSExt" type="text/css">
.ls{border-collapse:collapse;border:1pt solid #9999CC}

.lt{background-image:none;background-color:#666699;color:white;border:1pt solid #9999CC}

.lc{background-color:#F3F3F3;color:black;border:1pt solid white}

.lm{background-image:none;background-color:#F3F3F3;color:black;border:1pt solid white}

.lh{background-color:#CCCC99;color:black;border:1pt solid white}

.lf{background-color:#CCCC99;color:black;border:1pt solid white}

.ih{background-image:none;background-color:#CCCC99;color:black;border:1pt solid white}

.if{background-image:none;background-color:#CCCC99;color:black;border:1pt solid white}

.is{background-image:none;background-color:#CCCC99;color:black;border:1pt solid white}

.oh{background-color:#CCCCE3;color:black;border:1pt solid white}

.of{background-image:none;background-color:#CCCCE3;color:black;border:1pt solid white}

.os{background-image:none;background-color:#CCCCE3;color:black;border:1pt solid white}
</style>
<title>vmax819_820 EM-1</title>
<script language="javascript" type="text/javascript">
function docLocation(label)
{
    if (navigator.userAgent.indexOf('MSIE') != -1)
        label="mhtml:#"+label;
    else
        label="#"+label;
    document.location=label;
}
</script>
<script xmlns:rsext="xalan://com.cognos.reportserver.ext.RSExt" type="text/javascript">
            var gCognosViewerId = "_THIS_";
            var sLocation = document.location.search;
            if (sLocation.match(/cv\.id=([^&?]*)/))
            {
                gCognosViewerId = RegExp.$1;
            }
            
            function getCognosViewer()
            {
                var cognosViewer = null;
                try
                {
                    cognosViewer = eval("parent.oCV" + gCognosViewerId);
                }
                catch(e)
                {
                    cognosViewer = null; 
                }
                
                return cognosViewer;
            }
            
                
            function onClickEvent(evt)
            {
                var cognosViewer = getCognosViewer();
                if(cognosViewer && cognosViewer.rvMainWnd)
                {
                    cognosViewer.rvMainWnd.pageClicked(evt);
                }       
            };
            
        </script><script xmlns:rsext="xalan://com.cognos.reportserver.ext.RSExt" type="text/javascript">
    var userAgent = navigator.userAgent.toLowerCase();
    if ( (userAgent.indexOf("mozilla") > -1 && userAgent.indexOf ("msie") < 0)
        || (userAgent.indexOf("firefox") > -1))
    {
        var style = document.createElement ("style");
        style.setAttribute ("type", "text/css");
        var head = document.documentElement.getElementsByTagName ("head");
        if (head.length > 0)
            head.item (0).appendChild   (style);
        if (document.styleSheets.length > 0)
        {
            style.sheet.insertRule ("*[style*='text-align: right']{   text-align:-moz-right !important;   } ", 0);
            style.sheet.insertRule ("*[style*='text-align: center']{      text-align:-moz-center !important;      } ", 0);
        }
        for (index = 0; index < document.styleSheets.length; index++)
        {
            var styleSheet = document.styleSheets.item (index);
            for (iRule = 0; iRule < styleSheet.cssRules.length; iRule++)
            {
                var rule = styleSheet.cssRules.item (iRule);
                if (rule.style != null)
                {
                    var alignment = rule.style.getPropertyValue ("text-align");
                    if (alignment != null && alignment.length > 0)
                    {
                        if (alignment == "center")
                            rule.style.setProperty ("text-align", "-moz-center", "important");
                        else if (alignment == "right")
                            rule.style.setProperty ("text-align", "-moz-right", "important");
                    }
                }
            }
        }
    }
</script>
</head>
<body 
onclick="onClickEvent(event);" topmargin="0" leftmargin="0" style="background-color: #FFFFFF;">
<table xmlns:rsext="xalan://com.cognos.reportserver.ext.RSExt" cellpadding="0" cellspacing="0" border="0" class="pg" LID="Page1"><tr class="tableRow"><td style="padding-bottom:10px;" class="ph"><div class="ta"><span tabIndex="0" class="tt">Capacity Report: VMAX 819_820 EM-1</span></div></td></tr><tr class="tableRow"><td class="pb"><div style="height:8mm;" class="block"><span tabIndex="0" style="font-family:&quot;Arial Black&quot;;font-weight:bold;font-size:12pt;text-decoration:underline ;" class="textItem">Inventory</span></div><table style="border-collapse:collapse;width:100%;" class="sc" LID="List4" cellpadding="0"><tr><td class="sb"><table style="border-collapse:collapse;" class="ls" LID="List5" cellpadding="0"><tr><td class="lt"><span tabIndex="0" class="textItem">Array</span></td><td class="lt"><span tabIndex="-1" class="textItem">DG</span></td><td class="lt"><span tabIndex="-1" class="textItem">DES</span></td><td class="lt"><span tabIndex="-1" class="textItem">SIZE</span></td><td class="lt"><span tabIndex="-1" class="textItem">RPM</span></td><td class="lt"><span tabIndex="-1" class="textItem">Disk Count</span></td><td class="lt"><span tabIndex="-1" class="textItem">RAID</span></td><td class="lt"><span tabIndex="-1" class="textItem">Used Disks</span></td><td class="lt"><span tabIndex="-1" class="textItem">Used Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Available Disks</span></td><td class="lt"><span tabIndex="-1" class="textItem">Avail Cap (TB)</span></td></tr><tr><td class="lc" rowspan="3"><span tabIndex="-1" class="textItem">Sym-000292601819</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">TIER1_FC</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">408</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15000</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">160</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">RAID-6(14+2)</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem"></span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem"></span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">TIER2_FC</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">408</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15000</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">540</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">RAID-6(14+2)</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2,424</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">479.36</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">3</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">TIER3_SATA</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">931</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">7200</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">72</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">RAID-6(6+2)</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">184</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">36.39</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0</span></td></tr><tr><td style="color:#FFFFFF" class="of" colspan="5"><span tabIndex="-1" class="textItem">Sym-000292601819</span><span tabIndex="-1" class="textItem">&nbsp;-&nbsp;</span><span tabIndex="-1" class="textItem">Total</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">772</span></td><td style="color:#FFFFFF" class="of"></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">2,608</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">515.75</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">0</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">0.00</span></td></tr></table></td></tr><tr><td class="sb"><table style="border-collapse:collapse;" class="ls" LID="List5" cellpadding="0"><tr><td class="lt"><span tabIndex="0" class="textItem">Array</span></td><td class="lt"><span tabIndex="-1" class="textItem">DG</span></td><td class="lt"><span tabIndex="-1" class="textItem">DES</span></td><td class="lt"><span tabIndex="-1" class="textItem">SIZE</span></td><td class="lt"><span tabIndex="-1" class="textItem">RPM</span></td><td class="lt"><span tabIndex="-1" class="textItem">Disk Count</span></td><td class="lt"><span tabIndex="-1" class="textItem">RAID</span></td><td class="lt"><span tabIndex="-1" class="textItem">Used Disks</span></td><td class="lt"><span tabIndex="-1" class="textItem">Used Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Available Disks</span></td><td class="lt"><span tabIndex="-1" class="textItem">Avail Cap (TB)</span></td></tr><tr><td class="lc" rowspan="3"><span tabIndex="-1" class="textItem">Sym-000292601820</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">TIER1_FC</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">408</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15000</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">160</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">RAID-6(14+2)</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem"></span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem"></span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">TIER2_FC</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">408</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15000</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">412</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">RAID-6(14+2)</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2,128</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">420.82</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">3</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">TIER3_SATA</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">545</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">10000</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">RAID-6(6+2)</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">9.49</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0</span></td></tr><tr><td style="color:#FFFFFF" class="of" colspan="5"><span tabIndex="-1" class="textItem">Sym-000292601820</span><span tabIndex="-1" class="textItem">&nbsp;-&nbsp;</span><span tabIndex="-1" class="textItem">Total</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">620</span></td><td style="color:#FFFFFF" class="of"></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">2,176</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">430.31</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">0</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">0.00</span></td></tr></table></td></tr></table><div style="height:8mm;" class="block"><span tabIndex="0" style="font-family:&quot;Arial Black&quot;;font-weight:bold;font-size:12pt;text-decoration:underline ;" class="textItem">Pool Util</span></div><table style="border-collapse:collapse;" class="ls" LID="List1" cellpadding="0"><tr><td class="lt"><span tabIndex="0" class="textItem">Array</span></td><td class="lt"><span tabIndex="-1" class="textItem">Tier</span></td><td class="lt"><span tabIndex="-1" class="textItem">Pool Name</span></td><td class="lt"><span tabIndex="-1" class="textItem">Sub (%)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Disks</span></td><td class="lt"><span tabIndex="-1" class="textItem">Phy Cap(TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Alloc Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Used Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Avail Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Thin Sub (%)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Pool Util (%)</span></td></tr><tr><td style="text-align:center" class="lm" rowspan="15"><span tabIndex="-1" class="textItem">Sym-000292601819</span></td><td style="text-align:center" class="lm" rowspan="12"><span tabIndex="-1" class="textItem">Tier1</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_CL_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">284</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.09</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">22.46</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.63</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2.46</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">111.8</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">87.76</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_CL_02</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">284</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.24</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">32.57</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.17</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2.07</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">160.92</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">89.77</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_CL_03</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">132</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.53</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15.74</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">3.13</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">108.8</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">83.41</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_N1_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">56</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2.04</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2.06</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0.67</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.37</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">100.98</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">32.84</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_R2_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">284</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.09</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">22.54</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.73</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2.37</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">112.2</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">88.25</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_R2_02</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">284</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.24</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">29.6</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.25</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.98</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">146.25</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">90.17</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_R2_03</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">128</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.3</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15.89</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2.98</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">107.58</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">84.21</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_CL_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">160</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.26</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">30.78</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.78</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">151.92</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">91.21</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_CL_02</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">256</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">27.01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.75</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.12</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">143.14</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">94.06</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_N1_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">140</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">4.99</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">5.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.49</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">3.50</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">117.64</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">29.86</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R2_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">160</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.26</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">31.07</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.77</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.49</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">153.36</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">92.65</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R2_02</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">256</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">26.62</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.46</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.41</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">141.07</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">92.53</span></td></tr><tr><td style="color:#000000;background-color:#C0C0C0" class="of" colspan="2"><span tabIndex="-1" class="textItem">Tier1</span><span tabIndex="-1" class="textItem">&nbsp;-&nbsp;</span><span tabIndex="-1" class="textItem">Total</span></td><td style="color:#000000;background-color:#C0C0C0" class="of"></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">2,424</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">203.69</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">271.41</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">178.03</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">25.67</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"></td></tr><tr><td style="text-align:center" class="lm" rowspan="2"><span tabIndex="-1" class="textItem">Tier2</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_GC_03</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">96</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">19.84</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15.21</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">3.67</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">105.14</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">80.6</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_CL_03</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.7</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">23.33</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">14.95</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">3.75</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">124.76</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">79.95</span></td></tr></table></td></tr><tr class="tableRow"><td style="padding-top:10px;" class="pf"><table style="border-collapse:collapse;width:100%;" class="tb" cellpadding="0"><tr class="tableRow"><td style="width:25%;vertical-align:top;text-align:left;" class="tableCell"><span tabIndex="0" class="textItem">Nov 8, 2014</span></td><td style="width:50%;vertical-align:top;text-align:center;" class="tableCell"><span tabIndex="0" class="textItem">1</span></td><td style="width:25%;vertical-align:top;text-align:right;" class="tableCell"><span tabIndex="0" class="textItem">6:15:05 AM</span></td></tr></table></td></tr></table><table xmlns:rsext="xalan://com.cognos.reportserver.ext.RSExt" cellpadding="0" cellspacing="0" border="0" class="pg" LID="Page1"><tr class="tableRow"><td style="padding-bottom:10px;" class="ph"><div class="ta"><span tabIndex="0" class="tt">Capacity Report: VMAX 819_820 EM-1</span></div></td></tr><tr class="tableRow"><td class="pb"><div style="height:8mm;" class="block"><span tabIndex="0" style="font-family:&quot;Arial Black&quot;;font-weight:bold;font-size:12pt;text-decoration:underline ;" class="textItem">Inventory</span></div><div style="height:8mm;" class="block"><span tabIndex="0" style="font-family:&quot;Arial Black&quot;;font-weight:bold;font-size:12pt;text-decoration:underline ;" class="textItem">Pool Util</span></div><table style="border-collapse:collapse;" class="ls" LID="List1" cellpadding="0"><tr><td class="lt"><span tabIndex="0" class="textItem">Array</span></td><td class="lt"><span tabIndex="-1" class="textItem">Tier</span></td><td class="lt"><span tabIndex="-1" class="textItem">Pool Name</span></td><td class="lt"><span tabIndex="-1" class="textItem">Sub (%)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Disks</span></td><td class="lt"><span tabIndex="-1" class="textItem">Phy Cap(TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Alloc Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Used Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Avail Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Thin Sub (%)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Pool Util (%)</span></td></tr><tr><td style="text-align:center" class="lm" rowspan="21"><span tabIndex="-1" class="textItem">Sym-000292601819</span></td><td style="text-align:center" class="lm" rowspan="18"><span tabIndex="-1" class="textItem">Tier2</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_CL_04</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">26.93</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.72</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.16</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">142.71</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">93.91</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_CL_05</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">24</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">9.44</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">9.1</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">7.27</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2.17</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">96.4</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">77.01</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_CL_06</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">52</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.44</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">24.28</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.99</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.45</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">118.79</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">92.91</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_CL_07</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">40</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15.73</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.77</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">14.84</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0.89</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">132.04</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">94.34</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_CL_08</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">40</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15.73</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.38</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">14.62</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.10</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">129.56</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">92.94</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_GC_02</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">96</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">21.27</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">16.05</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2.82</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">112.72</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">85.06</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_GC_03</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.61</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">14.38</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">4.49</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">109.22</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">76.21</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_GC_04</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">23.53</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">14.73</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">4.14</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">124.7</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">78.06</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_GC_05</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">24</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">9.44</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">8.95</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">7.22</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2.21</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">94.81</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">76.48</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_GC_06</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">52</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.44</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">23.43</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.59</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.86</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">114.63</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">90.95</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_GC_07</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">40</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15.73</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">7.83</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">5.56</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">10.16</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">49.78</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">35.35</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_GC_08</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">40</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15.73</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">13.37</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">10.96</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">4.76</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">85</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">69.68</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R2_03</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.7</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">24.71</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">16.35</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2.35</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">132.14</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">87.43</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R2_04</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">26.93</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.00</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">142.71</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">94.7</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R2_05</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">24</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">9.44</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">10.66</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">8.46</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0.97</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">112.92</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">89.62</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R2_06</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">52</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.44</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">23.29</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.5</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.94</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">113.94</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">90.51</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R2_07</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">40</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15.73</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.77</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">14.52</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.21</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">132.04</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">92.31</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R2_08</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">40</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15.73</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.41</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">11.46</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">4.26</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">117.04</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">72.85</span></td></tr><tr><td style="color:#000000;background-color:#C0C0C0" class="of" colspan="2"><span tabIndex="-1" class="textItem">Tier2</span><span tabIndex="-1" class="textItem">&nbsp;-&nbsp;</span><span tabIndex="-1" class="textItem">Total</span></td><td style="color:#000000;background-color:#C0C0C0" class="of"></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">948</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">334.64</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">388.39</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">278.25</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">56.36</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"></td></tr><tr><td style="text-align:center" class="lm" rowspan="2"><span tabIndex="-1" class="textItem">Tier3</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_GC_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">56</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.15</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">22.54</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.12</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">3.03</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">111.86</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">84.96</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_GC_02</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">92</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">21.27</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">21.75</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">12.39</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">8.88</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">102.26</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">58.25</span></td></tr></table></td></tr><tr class="tableRow"><td style="padding-top:10px;" class="pf"><table style="border-collapse:collapse;width:100%;" class="tb" cellpadding="0"><tr class="tableRow"><td style="width:25%;vertical-align:top;text-align:left;" class="tableCell"><span tabIndex="0" class="textItem">Nov 8, 2014</span></td><td style="width:50%;vertical-align:top;text-align:center;" class="tableCell"><span tabIndex="0" class="textItem">2</span></td><td style="width:25%;vertical-align:top;text-align:right;" class="tableCell"><span tabIndex="0" class="textItem">6:15:05 AM</span></td></tr></table></td></tr></table><table xmlns:rsext="xalan://com.cognos.reportserver.ext.RSExt" cellpadding="0" cellspacing="0" border="0" class="pg" LID="Page1"><tr class="tableRow"><td style="padding-bottom:10px;" class="ph"><div class="ta"><span tabIndex="0" class="tt">Capacity Report: VMAX 819_820 EM-1</span></div></td></tr><tr class="tableRow"><td class="pb"><div style="height:8mm;" class="block"><span tabIndex="0" style="font-family:&quot;Arial Black&quot;;font-weight:bold;font-size:12pt;text-decoration:underline ;" class="textItem">Inventory</span></div><div style="height:8mm;" class="block"><span tabIndex="0" style="font-family:&quot;Arial Black&quot;;font-weight:bold;font-size:12pt;text-decoration:underline ;" class="textItem">Pool Util</span></div><table style="border-collapse:collapse;" class="ls" LID="List1" cellpadding="0"><tr><td class="lt"><span tabIndex="0" class="textItem">Array</span></td><td class="lt"><span tabIndex="-1" class="textItem">Tier</span></td><td class="lt"><span tabIndex="-1" class="textItem">Pool Name</span></td><td class="lt"><span tabIndex="-1" class="textItem">Sub (%)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Disks</span></td><td class="lt"><span tabIndex="-1" class="textItem">Phy Cap(TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Alloc Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Used Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Avail Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Thin Sub (%)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Pool Util (%)</span></td></tr><tr><td style="text-align:center" class="lm" rowspan="2"><span tabIndex="-1" class="textItem">Sym-000292601819</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">Tier3</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_GC_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">76</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.38</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">23.19</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15.07</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">5.31</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">113.79</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">73.95</span></td></tr><tr><td style="color:#000000;background-color:#C0C0C0" class="of" colspan="2"><span tabIndex="-1" class="textItem">Tier3</span><span tabIndex="-1" class="textItem">&nbsp;-&nbsp;</span><span tabIndex="-1" class="textItem">Total</span></td><td style="color:#000000;background-color:#C0C0C0" class="of"></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">224</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">61.80</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">67.48</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">44.58</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">17.22</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"></td></tr><tr><td style="color:#FFFFFF" class="of" colspan="3"><span tabIndex="-1" class="textItem">Sym-000292601819</span><span tabIndex="-1" class="textItem">&nbsp;-&nbsp;</span><span tabIndex="-1" class="textItem">Total</span></td><td class="of"></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">3,596</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">600.13</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">727.28</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">500.86</span></td><td style="text-align:center" class="os"><span tabIndex="-1" class="textItem">99.24</span></td><td style="color:#FFFFFF" class="of"></td><td style="color:#FFFFFF" class="of"></td></tr><tr><td style="text-align:center" class="lm" rowspan="20"><span tabIndex="-1" class="textItem">Sym-000292601820</span></td><td style="text-align:center" class="lm" rowspan="10"><span tabIndex="-1" class="textItem">Tier1</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_N1_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">280</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.09</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">24.19</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.5</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2.60</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">120.41</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">87.11</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_N1_02</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">284</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">14.85</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.04</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">11.89</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">2.96</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">121.48</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">80.07</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_R1_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">284</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.09</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.4</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">14.43</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">5.66</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">86.61</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">71.83</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_R1_02</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">284</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.24</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">29.14</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.34</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.90</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">143.97</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">90.61</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T1_R1_03</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">124</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">21.88</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.23</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.64</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">115.95</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">91.31</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_N1_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">160</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">14.27</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.74</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">12.66</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.61</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">124.32</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">88.72</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_N1_02</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">160</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">9.99</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">12.47</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">8.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.11</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">124.82</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">88.79</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_N1_03</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">64</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">7.52</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">9.35</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">6.09</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.43</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">124.34</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">80.98</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R1_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">160</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.26</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">31.32</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">19.12</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.14</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">154.59</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">94.37</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R1_02</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">328</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.78</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">27.63</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">16.91</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">147.12</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">90.04</span></td></tr><tr><td style="color:#000000;background-color:#C0C0C0" class="of" colspan="2"><span tabIndex="-1" class="textItem">Tier1</span><span tabIndex="-1" class="textItem">&nbsp;-&nbsp;</span><span tabIndex="-1" class="textItem">Total</span></td><td style="color:#000000;background-color:#C0C0C0" class="of"></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">2,128</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">164.96</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">209.16</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">143.04</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">21.93</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"></td></tr><tr><td style="text-align:center" class="lm" rowspan="9"><span tabIndex="-1" class="textItem">Tier2</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_N1_04</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.7</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">24.34</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.21</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.49</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">130.16</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">92.03</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_N1_05</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">52</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.44</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">29.08</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">19.19</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.26</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">142.27</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">93.88</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_N1_06</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">24</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">9.44</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">11.01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">8.01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.42</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">116.63</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">84.85</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_N1_07</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">52</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.44</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">32.61</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">19.15</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.30</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">159.54</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">93.69</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_N1_08</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">52</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.44</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">32.29</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">19.05</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.39</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">157.97</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">93.2</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_N1_09</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">56</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">22.02</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">36.99</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.7</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">3.32</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">167.98</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">84.92</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R1_03</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.7</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">23.21</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.57</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.12</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">124.12</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">93.96</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R1_04</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">18.87</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">26.93</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">17.88</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0.99</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">142.71</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">94.75</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R1_05</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">24</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">9.44</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">11.07</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">8.45</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">0.99</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">117.27</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">89.51</span></td></tr></table></td></tr><tr class="tableRow"><td style="padding-top:10px;" class="pf"><table style="border-collapse:collapse;width:100%;" class="tb" cellpadding="0"><tr class="tableRow"><td style="width:25%;vertical-align:top;text-align:left;" class="tableCell"><span tabIndex="0" class="textItem">Nov 8, 2014</span></td><td style="width:50%;vertical-align:top;text-align:center;" class="tableCell"><span tabIndex="0" class="textItem">3</span></td><td style="width:25%;vertical-align:top;text-align:right;" class="tableCell"><span tabIndex="0" class="textItem">6:15:05 AM</span></td></tr></table></td></tr></table><table xmlns:rsext="xalan://com.cognos.reportserver.ext.RSExt" cellpadding="0" cellspacing="0" border="0" class="pg" LID="Page1"><tr class="tableRow"><td style="padding-bottom:10px;" class="ph"><div class="ta"><span tabIndex="0" class="tt">Capacity Report: VMAX 819_820 EM-1</span></div></td></tr><tr class="tableRow"><td class="pb"><div style="height:8mm;" class="block"><span tabIndex="0" style="font-family:&quot;Arial Black&quot;;font-weight:bold;font-size:12pt;text-decoration:underline ;" class="textItem">Inventory</span></div><div style="height:8mm;" class="block"><span tabIndex="0" style="font-family:&quot;Arial Black&quot;;font-weight:bold;font-size:12pt;text-decoration:underline ;" class="textItem">Pool Util</span></div><table style="border-collapse:collapse;" class="ls" LID="List1" cellpadding="0"><tr><td class="lt"><span tabIndex="0" class="textItem">Array</span></td><td class="lt"><span tabIndex="-1" class="textItem">Tier</span></td><td class="lt"><span tabIndex="-1" class="textItem">Pool Name</span></td><td class="lt"><span tabIndex="-1" class="textItem">Sub (%)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Disks</span></td><td class="lt"><span tabIndex="-1" class="textItem">Phy Cap(TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Alloc Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Used Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Avail Cap (TB)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Thin Sub (%)</span></td><td class="lt"><span tabIndex="-1" class="textItem">Pool Util (%)</span></td></tr><tr><td style="text-align:center" class="lm" rowspan="6"><span tabIndex="-1" class="textItem">Sym-000292601820</span></td><td style="text-align:center" class="lm" rowspan="3"><span tabIndex="-1" class="textItem">Tier2</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R1_06</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">52</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.44</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">24.28</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">19.15</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.29</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">118.79</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">93.69</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R1_07</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">40</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15.73</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.58</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">13.96</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">1.77</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">130.83</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">88.75</span></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T2_R1_08</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">40</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">15.73</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">20.84</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">12.59</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">3.14</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">132.49</span></td><td style="text-align:center;font-weight:bold;color:#FF0000" class="lm"><span tabIndex="-1" class="textItem">80.04</span></td></tr><tr><td style="color:#000000;background-color:#C0C0C0" class="of" colspan="2"><span tabIndex="-1" class="textItem">Tier2</span><span tabIndex="-1" class="textItem">&nbsp;-&nbsp;</span><span tabIndex="-1" class="textItem">Total</span></td><td style="color:#000000;background-color:#C0C0C0" class="of"></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">536</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">210.39</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">293.23</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">190.91</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">19.48</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"></td></tr><tr><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">Tier3</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">T3_N1_01</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">400</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">64</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">42.99</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">33.31</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">14.96</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">28.04</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">77.48</span></td><td style="text-align:center" class="lm"><span tabIndex="-1" class="textItem">34.8</span></td></tr><tr><td style="color:#000000;background-color:#C0C0C0" class="of" colspan="2"><span tabIndex="-1" class="textItem">Tier3</span><span tabIndex="-1" class="textItem">&nbsp;-&nbsp;</span><span tabIndex="-1" class="textItem">Total</span></td><td style="color:#000000;background-color:#C0C0C0" class="of"></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">64</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">42.99</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">33.31</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">14.96</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"><span tabIndex="-1" class="textItem">28.04</span></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"></td><td style="color:#000000;background-color:#C0C0C0;text-align:center" class="of"></td></tr><tr><td style="color:#FFFFFF" class="of" colspan="3"><span tabIndex="-1" class="textItem">Sym-000292601820</span><span tabIndex="-1" class="textItem">&nbsp;-&nbsp;</span><span tabIndex="-1" class="textItem">Total</span></td><td class="of"></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">2,728</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">418.34</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">535.70</span></td><td style="color:#FFFFFF;text-align:center" class="of"><span tabIndex="-1" class="textItem">348.91</span></td><td style="text-align:center" class="os"><span tabIndex="-1" class="textItem">69.44</span></td><td style="color:#FFFFFF" class="of"></td><td style="color:#FFFFFF" class="of"></td></tr></table></td></tr><tr class="tableRow"><td style="padding-top:10px;" class="pf"><table style="border-collapse:collapse;width:100%;" class="tb" cellpadding="0"><tr class="tableRow"><td style="width:25%;vertical-align:top;text-align:left;" class="tableCell"><span tabIndex="0" class="textItem">Nov 8, 2014</span></td><td style="width:50%;vertical-align:top;text-align:center;" class="tableCell"><span tabIndex="0" class="textItem">4</span></td><td style="width:25%;vertical-align:top;text-align:right;" class="tableCell"><span tabIndex="0" class="textItem">6:15:05 AM</span></td></tr></table></td></tr></table><script xmlns:rsext="xalan://com.cognos.reportserver.ext.RSExt" type="text/javascript">          
    var userAgent = navigator.userAgent.toLowerCase();          
    if ( (userAgent.indexOf("mozilla") > -1 && userAgent.indexOf ("msie") < 0)
        || (userAgent.indexOf("firefox") > -1))
    {
        var elmList = document.getElementsByTagName("*");                                                   
        for (var index = 0 ; index < elmList.length; index++){
            var elm = elmList.item(index);                  
            if (elm.style.height && elm.style.width && elm.style.display == "inline"){
                elm.style.display = "inline-block";                         
            }                   
        }
    }                       
</script>
</body>
</html>
