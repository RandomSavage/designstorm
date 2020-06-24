import React from react;

const spinner = () => {
  <div className={classes.loader}>Loading...</div>
}

export default spinner;


purchaseContinueHaandler() {

}


axios.post('orders.json', order)
  .then(response => {
    this.setState({loading:false}
    )}
    console.log(response);
    .catch(response => {
      this.setState({loading:true})
    )}
