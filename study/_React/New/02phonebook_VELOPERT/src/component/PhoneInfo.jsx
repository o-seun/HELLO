import React, { Component } from 'react'

class PhoneInfo extends Component {
  static defaultProps = {
    info: {
      name: '이름',
      phone: '010-0000-0000',
      id: 0
    }
  }

  render() {
    const style = {
      border: '1px solid #57bfcf',
      padding: '5px',
      margin: '5px'
    }

    const {
      name, phone, id
    } = this.props.info

    return(
      <div style={style}>
        <div><b>{name}</b></div>
        <div>{phone}</div>
      </div>
    )
  }
}

export default PhoneInfo
