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

.lt{background-color:#666699;color:white;background-image:none;border:1pt solid #9999CC}

.lc{background-color:#F3F3F3;color:black;border:1pt solid white}

.lm{background-color:#F3F3F3;color:black;background-image:none;border:1pt solid white}

.lh{background-color:#CCCC99;color:black;border:1pt solid white}

.lf{background-color:#CCCC99;color:black;border:1pt solid white}

.ih{background-color:#CCCC99;color:black;background-image:none;border:1pt solid white}

.if{background-color:#CCCC99;color:black;background-image:none;border:1pt solid white}

.is{background-color:#CCCC99;color:black;background-image:none;border:1pt solid white}

.oh{background-color:#CCCCE3;color:black;border:1pt solid white}

.of{background-color:#CCCCE3;color:black;background-image:none;border:1pt solid white}

.os{background-color:#CCCCE3;color:black;background-image:none;border:1pt solid white}
</style>
<title>EMC STORAGE CHART</title>
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
<table xmlns:rsext="xalan://com.cognos.reportserver.ext.RSExt" cellpadding="0" cellspacing="0" border="0" class="pg" LID="Page1"><tr class="tableRow"><td style="padding-bottom:10px;" class="ph"><div class="ta"><span tabIndex="0" class="tt">EMC STORAGE ALLOCATION</span></div></td></tr><tr class="tableRow"><td class="pb"><map class="chart_map" LID="rsvptt0" name="rsvptt0"><area class="chart_area" type="legendTitle" shape="POLY" coords="395, 6, 487, 6, 487, 22, 395, 22" title="Data Center" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 23, 481, 23, 481, 35, 412, 35" title="Data Center = AM1" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 36, 481, 36, 481, 48, 412, 48" title="Data Center = AM1 - OGDC" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 49, 481, 49, 481, 61, 412, 61" title="Data Center = AM2" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 62, 481, 62, 481, 74, 412, 74" title="Data Center = AM2 - OGDC" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 75, 481, 75, 481, 87, 412, 87" title="Data Center = AP1" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 88, 481, 88, 481, 100, 412, 100" title="Data Center = AP2" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 101, 481, 101, 481, 114, 412, 114" title="Data Center = EM1" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 114, 481, 114, 481, 127, 412, 127" title="Data Center = EM2" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 127, 481, 127, 481, 140, 412, 140" title="Data Center = FE1" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 140, 481, 140, 481, 153, 412, 153" title="Data Center = FE2" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 153, 481, 153, 481, 166, 412, 166" title="Data Center = In Country" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 166, 481, 166, 481, 179, 412, 179" title="Data Center = N/A" tabIndex="-1"><area class="chart_area" type="legendLabel" shape="POLY" coords="412, 179, 481, 179, 481, 192, 412, 192" title="Data Center = Other" tabIndex="-1"><area class="chart_area" type="numericAxisTitle" shape="POLY" coords="7, 188, 7, 111, 20, 111, 20, 188" title="CAPACITY (TB)" tabIndex="-1"><area class="chart_area" type="ordinalAxisLabel" shape="POLY" coords="72, 292, 164, 292, 164, 331, 72, 331" title="EMC Storage Physcial Capacity (TB)" tabIndex="-1"><area class="chart_area" type="ordinalAxisLabel" shape="POLY" coords="177, 292, 270, 292, 270, 318, 177, 318" title="EMC Storage Used Capacity (TB)" tabIndex="-1"><area class="chart_area" type="ordinalAxisLabel" shape="POLY" coords="280, 292, 378, 292, 378, 331, 280, 331" title="EMC Storage Available Capacity (TB)" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 212, 292, 209, 366, 209, 366, 212" title="Data Center = Other &#10;EMC Storage Available Capacity (TB) = 118.54" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 101, 186, 99, 260, 99, 260, 101" title="Data Center = Other &#10;EMC Storage Used Capacity (TB) = 82.77" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 24, 81, 21, 155, 21, 155, 24" title="Data Center = Other &#10;EMC Storage Physcial Capacity (TB) = 201.31" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 212, 292, 212, 366, 212, 366, 212" title="Data Center = N/A &#10;EMC Storage Available Capacity (TB) = 0" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 101, 186, 101, 260, 101, 260, 101" title="Data Center = N/A &#10;EMC Storage Used Capacity (TB) = 0" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 24, 81, 24, 155, 24, 155, 24" title="Data Center = N/A &#10;EMC Storage Physcial Capacity (TB) = 0" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 213, 292, 212, 366, 212, 366, 213" title="Data Center = In Country &#10;EMC Storage Available Capacity (TB) = 83.87" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 103, 186, 101, 260, 101, 260, 103" title="Data Center = In Country &#10;EMC Storage Used Capacity (TB) = 109.64" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 28, 81, 24, 155, 24, 155, 28" title="Data Center = In Country &#10;EMC Storage Physcial Capacity (TB) = 193.51" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 215, 292, 213, 366, 213, 366, 215" title="Data Center = FE2 &#10;EMC Storage Available Capacity (TB) = 95.61" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 106, 186, 103, 260, 103, 260, 106" title="Data Center = FE2 &#10;EMC Storage Used Capacity (TB) = 184.42" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 33, 81, 28, 155, 28, 155, 33" title="Data Center = FE2 &#10;EMC Storage Physcial Capacity (TB) = 280.03" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 218, 292, 215, 366, 215, 366, 218" title="Data Center = FE1 &#10;EMC Storage Available Capacity (TB) = 183.78" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 110, 186, 106, 260, 106, 260, 110" title="Data Center = FE1 &#10;EMC Storage Used Capacity (TB) = 244.6" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 40, 81, 33, 155, 33, 155, 40" title="Data Center = FE1 &#10;EMC Storage Physcial Capacity (TB) = 428.38" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 220, 292, 218, 366, 218, 366, 220" title="Data Center = EM2 &#10;EMC Storage Available Capacity (TB) = 99.9" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 119, 186, 110, 260, 110, 260, 119" title="Data Center = EM2 &#10;EMC Storage Used Capacity (TB) = 500.8" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 50, 81, 40, 155, 40, 155, 50" title="Data Center = EM2 &#10;EMC Storage Physcial Capacity (TB) = 600.71" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 226, 292, 220, 366, 220, 366, 226" title="Data Center = EM1 &#10;EMC Storage Available Capacity (TB) = 349.77" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 127, 186, 119, 260, 119, 260, 127" title="Data Center = EM1 &#10;EMC Storage Used Capacity (TB) = 449.86" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 64, 81, 50, 155, 50, 155, 64" title="Data Center = EM1 &#10;EMC Storage Physcial Capacity (TB) = 799.63" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 227, 292, 226, 366, 226, 366, 227" title="Data Center = AP2 &#10;EMC Storage Available Capacity (TB) = 62.57" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 131, 186, 127, 260, 127, 260, 131" title="Data Center = AP2 &#10;EMC Storage Used Capacity (TB) = 231.88" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 69, 81, 64, 155, 64, 155, 69" title="Data Center = AP2 &#10;EMC Storage Physcial Capacity (TB) = 294.45" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 230, 292, 227, 366, 227, 366, 230" title="Data Center = AP1 &#10;EMC Storage Available Capacity (TB) = 199.86" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 151, 186, 131, 260, 131, 260, 151" title="Data Center = AP1 &#10;EMC Storage Used Capacity (TB) = 1,161.36" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 93, 81, 69, 155, 69, 155, 93" title="Data Center = AP1 &#10;EMC Storage Physcial Capacity (TB) = 1,361.22" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 232, 292, 230, 366, 230, 366, 232" title="Data Center = AM2 - OGDC &#10;EMC Storage Available Capacity (TB) = 133" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 157, 186, 151, 260, 151, 260, 157" title="Data Center = AM2 - OGDC &#10;EMC Storage Used Capacity (TB) = 345.56" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 101, 81, 93, 155, 93, 155, 101" title="Data Center = AM2 - OGDC &#10;EMC Storage Physcial Capacity (TB) = 478.56" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 256, 292, 232, 366, 232, 366, 256" title="Data Center = AM2 &#10;EMC Storage Available Capacity (TB) = 1,367.5" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 228, 186, 157, 260, 157, 260, 228" title="Data Center = AM2 &#10;EMC Storage Used Capacity (TB) = 4,156.69" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 196, 81, 101, 155, 101, 155, 196" title="Data Center = AM2 &#10;EMC Storage Physcial Capacity (TB) = 5,524.19" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 257, 292, 256, 366, 256, 366, 257" title="Data Center = AM1 - OGDC &#10;EMC Storage Available Capacity (TB) = 41.99" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 231, 186, 228, 260, 228, 260, 231" title="Data Center = AM1 - OGDC &#10;EMC Storage Used Capacity (TB) = 152.03" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 200, 81, 196, 155, 196, 155, 200" title="Data Center = AM1 - OGDC &#10;EMC Storage Physcial Capacity (TB) = 194.02" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="292, 288, 292, 257, 366, 257, 366, 288" title="Data Center = AM1 &#10;EMC Storage Available Capacity (TB) = 1,806.92" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="186, 288, 186, 231, 260, 231, 260, 288" title="Data Center = AM1 &#10;EMC Storage Used Capacity (TB) = 3,294.48" tabIndex="-1"><area class="chart_area" type="chartElement" shape="POLY" coords="81, 288, 81, 200, 155, 200, 155, 288" title="Data Center = AM1 &#10;EMC Storage Physcial Capacity (TB) = 5,101.4" tabIndex="-1"></map><span tabIndex="0"><img name="chartN088447C0.0C30D358" style="padding-left: 0px;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;" class="ch" LID="Combination Chart1" src="/images/Capacity/EMC.png" width="500" height="350" usemap="#rsvptt0" border="0"></span><table style="border-collapse:collapse;width:100%;" class="tb" cellpadding="0"><tr class="tableRow"><td class="tableCell"><table style="border:1pt solid #9999CC;border-collapse:collapse;" class="ls" LID="List1" cellpadding="0"><tr><td style="color:#FFFFFF;background-color:#666699;background-image:none;border:1pt solid #9999CC" class="lt"><span tabIndex="0" class="textItem">Data Center</span></td><td style="color:#FFFFFF;background-color:#666699;background-image:none;border:1pt solid #9999CC" class="lt"><span tabIndex="-1" class="textItem">EMC Storage Physcial Capacity (TB)</span></td><td style="color:#FFFFFF;background-color:#666699;background-image:none;border:1pt solid #9999CC" class="lt"><span tabIndex="-1" class="textItem">EMC Storage Used Capacity (TB)</span></td><td style="color:#FFFFFF;background-color:#666699;background-image:none;border:1pt solid #9999CC" class="lt"><span tabIndex="-1" class="textItem">EMC Storage Available Capacity (TB)</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">AM1</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">5,101.4</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">3,294.48</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">1,806.92</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">AM1 - OGDC</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">194.02</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">152.03</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">41.99</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">AM2</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">5,524.19</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">4,156.69</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">1,367.5</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">AM2 - OGDC</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">478.56</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">345.56</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">133</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">AP1</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">1,361.22</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">1,161.36</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">199.86</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">AP2</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">294.45</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">231.88</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">62.57</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">EM1</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">799.63</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">449.86</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">349.77</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">EM2</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">600.71</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">500.8</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">99.9</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">FE1</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">428.38</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">244.6</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">183.78</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">FE2</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">280.03</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">184.42</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">95.61</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">In Country</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">193.51</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">109.64</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">83.87</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">N/A</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">0</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">0</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">0</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">Other</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">201.31</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">82.77</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">118.54</span></td></tr><tr><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">Total</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">15,457.4</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">10,914.08</span></td><td style="color:#000000;background-color:#F3F3F3;background-image:none;border:1pt solid #FFFFFF" class="lm"><span tabIndex="-1" class="textItem">4,543.32</span></td></tr></table></td></tr></table></td></tr><tr class="tableRow"><td style="padding-top:10px;" class="pf"></td></tr></table><script xmlns:rsext="xalan://com.cognos.reportserver.ext.RSExt" type="text/javascript">            
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
