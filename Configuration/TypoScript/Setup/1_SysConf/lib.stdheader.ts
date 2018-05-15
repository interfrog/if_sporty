lib.stdheader {
  10 {
    setCurrent.htmlSpecialChars = 0
    setCurrent.br = 1
    1.dataWrap >
    1.wrap.cObject = COA
    1.wrap.cObject {
      10 = COA
      10 {
        wrap = <h2|>
        10 = COA
        10 {
          stdWrap.noTrimWrap = | class="|"|
          10 = TEXT
          10.value = hassub
          10.if.isTrue.field = subtitle
          10.stdWrap.noTrimWrap = || |
          20 < .10
          20.value = strokes
          20.if.isTrue.field = strokes
          30 < .10
          30.value = alternativefont
          30.if.isTrue.field = alternativefont
          40 < .10
          40.value = align-{field:header_position}
          40.insertData = 1
          40.if.isTrue.field = header_position
        }
      }
      99 = TEXT
      99.value = |</h2>
    }
    2 >
    2 < .1
    2.wrap.cObject {
      10.wrap = <h3|>
      99.value = |</h3>
    }
    3 >
    3 < .1
    3.wrap.cObject {
      10.wrap = <h4|>
      99.value = |</h4>
    }
    4 >
    4 < .1
    4.wrap.cObject {
      10.wrap = <h5|>
      99.value = |</h5>
    }
    6 < .1
    6.wrap.cObject {
      10.wrap = <h1|>
      99.value = |</h1>
    }
    setCurrent.htmlSpecialChars = 0

    stdWrap.postCObject = CASE
    stdWrap.postCObject {
      key.field = header_layout
      default = TEXT
      default {
        field = subtitle
        br = 1
        required = 1
        wrap = <h3>|</h3>
      }
      2 < .default
      2.wrap = <h4>|</h4>
      3 < .default
      3.wrap = <h5>|</h5>
      4 < .default
      4.wrap = <h6>|</h5>
      6 < .default
      6.wrap = <h2>|</h2>
    }
  }
  stdWrap.dataWrap >
}


