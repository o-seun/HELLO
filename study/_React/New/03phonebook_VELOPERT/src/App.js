import React, { Component } from 'react';

import PhoneBook from './component/PhoneBook'
import PhoneInfoList from './component/PhoneInfoList'

class App extends Component {
  id = 2
  state = {
    information: [
      {
        id: 0,
        name: '김씨',
        phone: '010-0000-0000'
      },
      {
        id: 1,
        name: '박씨',
        phone: '010-1111-1111'
      }
    ]
  }

  handleCreate = (data) => {
    const { information } = this.state;
    this.setState({
      information: information.concat({ id: this.id++, ...data })
    })
  }

  handleRemove = (id) => {
    const { information } = this.state;
    this.setState({
      information: information.filter(info => info.id !== id)
    })
  }

  handleUpdate = (id, data) => {
    const { information } = this.state
    this.setState({
      information: information.map(
        info => id === info.id
          // 새 객체를 만들어서 기존의 값과 전달받은 data를 덮어씀
          ? { ...info, ...data }
          // 기존의 값을 그대로 유지
          : info
      )
    })
  }

  render() {
    const { information } = this.state;
    return (
      <React.Fragment>
        <PhoneBook
          onCreate={this.handleCreate}
        />
        <PhoneInfoList
          data={information}
          onRemove={this.handleRemove}
          onUpdate={this.handleUpdate}
        />
      </React.Fragment>
    );
  }
}

export default App;
