lib.headerContent = CONTENT
lib.headerContent {
  table = tt_content
  select {
    where = colPos = 1
    orderBy = sorting
    languageField = sys_language_uid
  }
  renderObj < tt_content
  renderObj.stdWrap.innerWrap >
  renderObj.stdWrap.outerWrap >
}
