import React, { Component } from 'react'

// import { BrowserRouter as Router, Route, Switch } from "react-router-dom"
// import Routes from "../../route"

import ComponentItem from './ComponentItem'

import ItemList from './list/ItemList'

class Contract extends Component {
  render () {
    return (
      <React.Fragment>
        <section>
          <div>

            <div className="list">
              <ul>
                {ItemList.map((data, key) => {
                return (
                  <li {...{ key }}>
                    <ComponentItem {...data} />
                  </li>
                  )
                })}
              </ul>
            </div>

          </div>
        </section>
      </React.Fragment>

    )
  }
}

export default Contract
