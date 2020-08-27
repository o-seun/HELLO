import React, { Component } from 'react'

class ComponentItem extends Component {
  state = {
    isOpen: false
  }

  render () {
    const {
      props: {
        categorie,
        text,
        title
      },
      state: {
        isOpen
      }
    } = this

    return (
      <div className="box">
        <div
          {...{
            className: `accordion, ${isOpen && 'accordion-open'}`,
            onClick: () => { this.setState({ isOpen: !isOpen }) }
          }}
        >
          <div {...{ className: 'tab-title' }}>
            <span {...{ className: 'width-20' }}>
              {categorie}
            </span>
            <span>
              {title}
            </span>
          </div>
          <div {...{ className: 'collapse' }}>
            <span {...{ className: 'width-20' }}></span>
              <span {...{ className: 'explain pre-line' }}>
                {text}
              </span>
          </div>
        </div>
      </div>
    )
  }
}

export default ComponentItem
