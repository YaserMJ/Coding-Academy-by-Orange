import React from 'react'
import Repo from './Repo';
//=====================================================================================================//
const Table = ({ repos,del,toggle }) =>(
  <div style={{ border: '3px green dotted' }}>
    <table className="table table-hover">
        <thead className='color'>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Repository name</th>
                <th scope="col">Repository language</th>
                <th scope="col">Status</th>
                <th scope="col">Check</th>
                <th scope="col">isPrivate</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        {repos.map((rep, i) => (
            <Repo toggle={toggle} del={del} rep={rep} key={i} id={rep.id} />
        ))}
    </table>
    </div>
)
export default Table;