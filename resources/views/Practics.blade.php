publict funcation rederictdashbaord(){
$redirect='';
if(Auth->User() && Auth->User()-roleidfk==1){
$redirect='/Admin/dashbaord';
}else{
$redirect='/dasbaord';
}
return $redirect;
}





publict funcation login(Request $reuest){
$condition=$request->only('email','password');
if(Auth::Attempt($condition)){
$rout=this->rederictdashbaord();
return redurect($route);
}else{
return back()->with('error'='invalid');
}
}



publict funcation login(Request $reuest){

  $condition=  $request->only('email','password');
  if(Auth::attempt($condition)){
    this->redurectdashbaord();
  }

}