import React, { Component } from 'react'

class MyName extends Component {
  render() {
    return(
      <React.Fragment>
        <div>
          안녕? 내 이름은 <b>{this.props.name}</b>입니다.
        </div>
      </React.Fragment>
    )
  }
}

MyName.defaultProps = {
  name: '기본이름'
}

export default MyName
