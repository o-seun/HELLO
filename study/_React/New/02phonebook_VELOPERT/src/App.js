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

  render() {
    const { information } = this.state;
    return (
      <React.Fragment>
        <PhoneBook
          onCreate={this.handleCreate}
        />
        <PhoneInfoList data={this.state.information} />
      </React.Fragment>
    );
  }
}

export default App;
