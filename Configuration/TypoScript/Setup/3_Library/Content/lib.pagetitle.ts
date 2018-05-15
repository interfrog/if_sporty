lib.pagetitle = CONTENT
lib.pagetitle{
  table = tx_ifthemeconfiguration_domain_model_themeconfiguration
  select {
    pidInList.data = leveluid : 0
    max = 1
  }
  renderObj = TEXT
  renderObj.field = pagetitle
}